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

    public function ContactForm(){
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

}
