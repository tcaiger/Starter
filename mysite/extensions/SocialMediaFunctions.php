<?php

class SocialMediaFunctions extends DataExtension {


    /**
     * @param $url
     * @return mixed
     */
    public function fetchData($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
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

    public function autoLinkText($str){
        $attrs = ' target="_blank" rel="nofollow"';

        $str = ' ' . $str;
        $str = preg_replace(
            '`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i',
            '$1<a href="$2"'.$attrs.'>$2</a>',
            $str
        );
        $str = substr($str, 1);

        return $str;
    }


    /**
     * Used in templates to remove newlines from json data attributes
     * @param string $string the string to remove the newlines from
     */
    public function RemoveNewline($string) {

        $string = trim(preg_replace('/\s\s+/', ' ', $string));

        return $string;
    }
}