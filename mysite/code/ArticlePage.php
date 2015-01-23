<?php
	class ArticlePage extends Page{
		private static $db = array('Date' => 'Date',
		                           'Author' => 'Text');

		private static $icon = "themes/simple/images/icons/news-icon.png";

		public function getCMSFields(){
			$fields = parent::getCMSFields();
			$dateField = new DateField('Date', 'Article Date (for example: 20/12/2010)');
			$dateField->setConfig('showcalendar', true);  
			$dateField->setConfig('dateformat', 'dd/MM/YYYY');

			$fields->addFieldToTab('Root.Main', $dateField, 'Content');
		  	$fields->addFieldToTab('Root.NEWTAB', new TextField('Author', 'Name of Author of this article'));

		  	return $fields;
		} //end getCMSFields 



	}

	class ArticlePage_Controller Extends Page_Controller{


	}

?>