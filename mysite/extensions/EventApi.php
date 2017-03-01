<?php

class EventApi extends Extension {

    private $api_endpoint = '';
    private $api_username = '';
    private $api_password = '';
    private $api_connection_tested = false;

    /*
    constructor for object
    - default endpoint is events, but this can be overidden using the $mode passed to get_dataset()
    */
    function __construct() {
        $config = Config::inst();

        $this->api_endpoint = $config->get('EventApi', 'eventEndPoint'); // update later to switch endpoints depending upon query type
        $this->api_username = $config->get('EventApi', 'eventFinderUsername');
        $this->api_password = $config->get('EventApi', 'eventFinderPassword');
    }

    public function api_connect($query_string = null) {

        $qs = '';

        if($query_string && strlen($query_string) > 0) {
            $qs = $query_string;
        }

        $process = curl_init($this->api_endpoint . $qs);
        curl_setopt($process, CURLOPT_USERPWD, $this->api_username . ":" . $this->api_password);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
        $event_data = curl_exec($process);

        return $event_data;
    }

    /*
    utiliuty function to set up query string from array key / value pairs
    @param $parameters Array - key: value pairs
    @return String
    */
    public function set_query_string(Array $parameters) {
        $qs = '?';

        foreach ($parameters as $key => $value) {
            $qs .= urlencode($key) . '=' . urlencode($value).'&';
        }

        if(strlen($qs) > 0) {
            // strip last &
            $qs = substr($qs, 0, strlen($qs) - 1);
        }

        return $qs;
    }

    /*
    get a set of data from EF based on queries and modified date
    @param String $qsParams - query string parameters to pass to query
    @return Array - structured event data
    */
    public function ef_query(Array $qsParams) {

        $qs = '';


        if(!empty($qsParams)) {
            $qs = $this->set_query_string($qsParams);
        }

        $data = $this->api_connect($qs);

        // format as array
        return Convert::json2array($data);
    }

    /*
    take some parameters and retunr a full result set from EF
    - acts as a wrapper and control for multiple requests to EF via get_data()
    - EF result sets are limited to max of 20 per query so we use this function to run repeat requests and bundle
    the results into one array

    @param Array $qsParams - query string parameters to filter the query
    @param Int $limit - a hard limit on the result set size you want returned
    @param String $mode - modifier for querying against different API endpoints

    @return Array - events from query parameters
    */
    public function get_dataset(Array $qsParams, $limit, $mode) {

        if(!isset($mode)) {
            $mode = 'events';
        }
        else {

            $config = Config::inst();

            switch($mode) {

                case 'categories':
                    $this->api_endpoint = $config->get('EventApi', 'categoryEndPoint');
                    break;

                case 'locations':
                    $this->api_endpoint = $config->get('EventApi', 'locationEndPoint');
                    break;

                default:
                    $this->api_endpoint = $config->get('EventApi', 'eventEndPoint');
                    break;
            }

        }


        if(!isset($qsParams['rows'])) {
            $qsParams['rows'] = 20; // current EF max result set limit
        }

        $pointer = 0; // current pointer
        $results = array(); // container for result set

        // we use the first query to determine the size of the full result set
        // redundant but allows the while() loop to be written more clearly
        $result = $this->ef_query($qsParams);


        if(!$result) {
            // TODO: error handling
            return false;
        }

        $total = $result['@attributes']['count']; // full result set size

        if(isset($limit) && $limit < $total) {
            $total = $limit;
        }

        // don't run extra queries if we don't need to
        if($total <= $qsParams['rows']) {
            foreach($result[$mode] as $item) {
                array_push($results, $item);
            }

            return $results;
        }

        while($total > $pointer) {
            $qsParams['offset'] = $pointer;
            $result = $this->ef_query($qsParams);
            $pointer += count($result[$mode]);

            // don't try and fetch more rows than there are results left from the offset - EF doesn't seem to like this
            if($total - $pointer < $qsParams['rows']) {
                $qsParams['rows'] = $total - $pointer;
            }

            foreach($result[$mode] as $item) {
                array_push($results, $item);
            }
            // break the query intervals up slightly - try and avoid any internal EF rate limiting
            usleep(300);
        }


        return $results;
    }

}