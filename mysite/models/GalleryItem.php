<?php

class GalleryItem extends DataObject {

    private static $db = [
        'SortOrder'     => 'Int'
    ];

    private static $has_one = [
        'GalleryImage' => 'Image'
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
