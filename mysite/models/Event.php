<?php

class Event extends DataObject {

    private static $db = [
        'Name'        => 'Varchar(200)',
        'Location'    => 'Varchar(100)',
        'LocationURL' => 'Varchar(255)',
        'Category'    => 'Varchar(200)',
        'Date'        => 'SS_DateTime',
        'Day'         => 'Int',
        'Month'       => 'Varchar',
        'Year'        => 'Varchar',
        'Link'        => 'Varchar(255)',
        'RelID'       => 'Varchar(50)'
    ];

    private static $has_one = [
        'Image' => 'Image'
    ];

    public static $summary_fields = [
        'Name'                 => 'Name',
        'SummaryDate'          => 'Date',
        'Image.StripThumbnail' => 'Image',
        'Location'             => 'Location',
        'Category'             => 'Category'
    ];

    private static $default_sort = 'Date ASC';

    public function SummaryDate() {
        return DBField::create_field('Varchar', DBField::create_field('Date', $this->Date)->Format('j M Y'));
    }

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }


    public function getDay() {
        return DBField::create_field('Date', $this->Date)->Format('d');
    }

    public function getMonth() {
        return DBField::create_field('Date', $this->Date)->Format('M');
    }

    public function getYear() {
        return DBField::create_field('Date', $this->Date)->Format('Y');
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