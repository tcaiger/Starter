<?php

class Page extends SiteTree {


    private static $db = array();

    private static $has_one = array();


}

class Page_Controller extends ContentController {


    public function init() {
        parent::init();
        Requirements::css("{$this->ThemeDir()}/css/main.css");


        // Combine and include js (stop minifying)
        Requirements::combine_files(
            'main.js',
            [
                "{$this->ThemeDir()}/js/vendor/jquery.min.js",
                "{$this->ThemeDir()}/js/vendor/bootstrap.min.js",
                "{$this->ThemeDir()}/js/vendor/matchHeight.min.js",
                "{$this->ThemeDir()}/js/vendor/icheck.min.js",
                "{$this->ThemeDir()}/js/vendor/slick.min.js",
                "{$this->ThemeDir()}/js/vendor/jqueryui.min.js",
                "{$this->ThemeDir()}/js/vendor/chosen.jquery.min.js",
                "{$this->ThemeDir()}/js/scripts.js"
            ]);

        Requirements::backend()->combine_js_with_jsmin = false;
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
