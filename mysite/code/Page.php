<?php
class Page extends SiteTree {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
        parent::init();
        Requirements::javascript("themes/simple/javascript/jquery.metadata.js");
        Requirements::javascript("themes/simple/javascript/eric_script.js");
        
       /* $ThemeDir =  $this->ThemeDir();
        Requirements::set_write_js_to_body(true);
        Requirements::set_combined_files_folder($ThemeDir.'/_requirements');
        Requirements::combine_files(
            'site.css',
            array(
                $ThemeDir.'/css/site.css',
            )
        );
        Requirements::javascript("//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js");
        Requirements::combine_files(
            'site.js',
            array(
                $ThemeDir.'/javascript/libs.js',
                $ThemeDir.'/bower_components/bootstrap/js/affix.js',
                $ThemeDir.'/bower_components/bootstrap/js/alert.js',
                $ThemeDir.'/bower_components/bootstrap/js/button.js',
                $ThemeDir.'/bower_components/bootstrap/js/carousel.js',
                $ThemeDir.'/bower_components/bootstrap/js/collapse.js',
                $ThemeDir.'/bower_components/bootstrap/js/dropdown.js',
                $ThemeDir.'/bower_components/bootstrap/js/modal.js',
                $ThemeDir.'/bower_components/bootstrap/js/tooltip.js',
                $ThemeDir.'/bower_components/bootstrap/js/popover.js',
                $ThemeDir.'/bower_components/bootstrap/js/scrollspy.js',
                $ThemeDir.'/bower_components/bootstrap/js/tab.js',
                $ThemeDir.'/bower_components/bootstrap/js/transition.js',
                $ThemeDir.'/javascript/main.js'
            )
        );*/
    }

}
