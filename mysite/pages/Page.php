<?php

class Page extends SiteTree {


    private static $db = [];

    private static $has_one = [];


}

class Page_Controller extends ContentController {

    private static $allowed_actions = [
        'ContactForm'
    ];


    public function init() {
        parent::init();

        Requirements::clear(THIRDPARTY_DIR . "/jquery/jquery.js");
        Requirements::clear("forum/javascript/Forum.js");
        Requirements::clear("forum/javascript/jquery.MultiFile.js");

        Requirements::css("{$this->ThemeDir()}/css/main.css");
        Requirements::combine_files(
            'main.js',
            [
                THIRDPARTY_DIR . "/jquery/jquery.js",
                "{$this->ThemeDir()}/js/vendor/jquery.min.js",
                "{$this->ThemeDir()}/js/vendor/bootstrap.min.js",
                "{$this->ThemeDir()}/js/vendor/matchHeight.min.js",
                "{$this->ThemeDir()}/js/vendor/icheck.min.js",
                "{$this->ThemeDir()}/js/vendor/slick.min.js",
                "{$this->ThemeDir()}/js/vendor/jqueryui.min.js",
                "{$this->ThemeDir()}/js/vendor/chosen.jquery.min.js",
                "{$this->ThemeDir()}/js/vendor/modernizer.js",
                "{$this->ThemeDir()}/js/vendor/focuspoint.min.js",
                "forum/javascript/Forum.js",
                "forum/javascript/jquery.MultiFile.js",
                "{$this->ThemeDir()}/js/expander.js",
                "{$this->ThemeDir()}/js/scripts.js"
            ]);

        Requirements::backend()->combine_js_with_jsmin = false;
    }

    public function ContactForm() {
        return new ContactForm($this, 'ContactForm');
    }


    /**
     * @param $pagetype string
     *
     * @return Page
     */
    public static function GetPage($pagetype) {
        $page = DataList::create($pagetype);
        if ($page->exists()) {
            return $page->first();
        }
    }

    /**
     * @param $pagetype
     *
     * @return string
     */
    public function PageLink($pagetype) {
        if ($page = $this->GetPage($pagetype)) {
            return $page->Link();
        }
    }


    public function getEvents() {
        return Event::get()->filter('Month', 'march');
    }


    public function findEvent($day, $month, $year) {
        $monthName = $this->convertMonth($month);
        $event = Event::get()->filter([
            'Day'   => $day,
            'Month' => $monthName,
            'Year'  => $year
        ])->first();

        return $event ? $event->Name : null;
    }


    public function DaysInMonth($month, $year) {

        $x = $this->CalculateDays($month, $year);

        $days = new ArrayList;

        for ($i = 1; $i <= $x; $i++) {

            $name = $this->findEvent($i, $month, $year);

            $data = new ArrayData([
                'ID'   => $i,
                'Name' => $name
            ]);
            $days->push($data);
        }

        return $days;
    }

    public function CalculateDays($month, $year) {
        $d = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        return $d;
    }

    public function convertMonth($monthNum) {
        $date = DateTime::createFromFormat('!m', $monthNum);
        return $date->format('F'); // March
    }


}
