<?php

class Category extends dataobject {


    private static $db = [
        'Title'      => 'Varchar(50)',
        'URLSegment' => 'Varchar(80)',
        'SortOrder'  => 'Int'
    ];

    private static $has_one = [];

    private static $belongs_many_many = [];


    private static $summary_fields = [
        'Title' => 'Title'
    ];

    private static $default_sort = 'SortOrder';


    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->removeByName([
            'URLSegment',
            'SortOrder'
        ]);

        return $fields;
    }

    public function onBeforeWrite() {

        parent::onBeforeWrite();

        if ( ! $this->URLSegment || $this->isChanged('Title')) {
            $title = $this->Title;
            $siteTree = new SiteTree;
            $this->URLSegment = $siteTree->generateURLSegment($title);
        }
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

