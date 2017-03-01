<?php

// EventApiTask is used to run periodic refresh from EF API
class EventApiTask extends BuildTask {

    protected $title = "Event Finder Task";
    protected $description = "Get events from event finder and write them to the database";

    function run($request) {

        $ef = new EventApi;

        $query_attributes = array(
            'category' => 0,
            'location' => 8426,
            'start_date' => date('Y-m-d h:i:s', strtotime('-1 day')),
            'end_date' => date('Y-m-d h:i:s', strtotime('+1 year'))
        );

        $results = $ef->get_dataset($query_attributes, 300, 'events');

        echo count($results) . ' results returned';



        if ($results) {

            $i = 1;
            foreach ($results as $entry) {
                $id = $entry['id'];

                $Event = DataObject::get_one('Event', "RelID = '$id'");
                if (!$Event) {
                    $Event = Object::create('Event');
                    $Event->RelID = $id;
                }


                $Event->Name = $entry['name'];
                $Event->Location = $entry['location']['name'];
                $Event->LocationURL = $entry['location']['url_slug'];
                $Event->Category = $entry['category']['name'];
                $Event->Date = $entry['datetime_start'];
                $Event->Day = $this->makeDay($entry['datetime_start']);
                $Event->Month = $this->makeMonth($entry['datetime_start']);
                $Event->Year = $this->makeYear($entry['datetime_start']);
                $Event->Link =  $entry['url'];

                $img = $entry['images']['images'][0]['transforms']['transforms'][2]['url'];
                if ($img) {
                    $ImageID = $this->writeImage($img, 'EventFinder', time() . $i, 'png');
                } else {
                    $ImageID = 0;
                }
                $Event->ImageID = $ImageID;

                $Event->write();

                $i++;
            }
        }

        return true;
    }


    /**
     * @param $date
     * @return mixed
     */
    public function makeDay($date){
        $month = DBField::create_field('Date', $date)->Format('j');
        return strtolower($month);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function makeMonth($date){
        $month = DBField::create_field('Date', $date)->Format('F');
        return strtolower($month);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function makeYear($date){
        $year = DBField::create_field('Date', $date)->Format('Y');
        return strtolower($year);
    }


    /**
     * @param $image
     * @param $folder
     * @param $filename
     * @param $filetype
     * @return bool|int
     */
    public function writeImage($image, $folder, $filename, $filetype) {
        // The target folder for the image
        $folderToSave = 'Uploads/Feeds/'.$folder.'/';
        $folderObject = Folder::find_or_make($folderToSave);


        if($folderObject){
            //get image from url and save to folder
            $imageToCopy = file_get_contents($image);
            $imageName = $filename.'.'.$filetype;

            $imageFile = fopen('./../assets/'.$folderToSave.$imageName, 'w'); // opens existing or creates a new file
            fwrite($imageFile, $imageToCopy); //overwrites file
            fclose($imageFile); //close file


            $imageObject = Object::create('Image');
            $imageObject->ParentID = $folderObject->ID;
            $imageObject->Name = $imageName;
            $imageObject->OwnerID = 1;
            $imageObject->write();

            $ImageID = DataObject::get_one('Image', "`Name` = '{$imageName}'")->ID;

            return $ImageID;
        }

        return false;
    }
}