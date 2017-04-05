<?php

global $project;
$project = 'mysite';
i18n::set_locale('en_NZ');


global $database;
$database = 'starter';
require_once('conf/ConfigureFromEnv.php');



/* -------------------------------
 * Config
  -------------------------------*/



/*------------------------------------*\
    #TINYMCE
\*------------------------------------*/
HtmlEditorConfig::get('cms')->setOptions(array(
    'height' => '400',
    'width'  => '700'
));

HtmlEditorConfig::get('cms')->setButtonsForLine(1, 'bold', 'italic', 'underline', 'separator', 'bullist', 'numlist', 'separator', 'styleselect', 'formatselect', 'link', 'code');
HtmlEditorConfig::get('cms')->setButtonsForLine(2, '');


/* -------------------------------
 * Security
  ------------------------------- */
if(Director::isLive()) {
    Director::forceWWW();
    Director::forceSSL();
}