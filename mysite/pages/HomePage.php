<?php

class HomePage extends Page {

    private static $allowed_children = 'none';

    private static $db = [];

    private static $has_one = [];

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [

        ], 'Metadata');


        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {



}