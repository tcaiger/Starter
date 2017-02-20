<?php

class GalleryItem extends DataObject {

    private static $db = [
        'VideoID'       => 'Varchar',
        'VideoCheckbox' => 'Boolean',
        'SortOrder'     => 'Int'
    ];

    private static $has_one = [
        'GalleryImage' => 'GalleryImage'
    ];

    private static $summary_fields = [
        'GalleryImage.StripThumbnail' => 'Image'
    ];

    private static $default_sort = 'SortOrder';

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->removeByName([
            'SortOrder'
        ]);

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('VideoID'),
            CheckboxField::create('VideoCheckbox', 'Set As Video')
        ]);


        $upload = $fields->dataFieldByName('GalleryImage');
        $upload->getValidator()->setAllowedMaxFileSize('1m');

        return $fields;
    }


    public function getCMSValidator() {
        return new RequiredFields('GalleryImage');
    }


    public function canCreate($member = null) {
        return true;
    }

    public function canEdit($member = null) {
        return true;
    }

    public function canDelete($member = null) {
        return true;
    }

    public function canView($member = null) {
        return true;
    }
}

class GalleryImage extends Image {

    public function Img600by300() {
        return $this->owner->getFormattedImage('Img600by300');
    }

    public function generateImg600by300(Image_Backend $backend) {
        return $backend->croppedResize(600, 300);
    }
}