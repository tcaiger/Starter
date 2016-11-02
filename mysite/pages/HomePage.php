<?php

class HomePage extends Page {

    private static $allowed_children = 'none';

    private static $db = array(

    );

    private static $has_one = array(

    );

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', array(

        ), 'Metadata');


        return $fields;
    }

}

class HomePage_Controller extends Page_Controller {



}