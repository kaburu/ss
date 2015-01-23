<?php
	class StaffPage extends Page{
		private static $db = array();
		private static $has_one = array (
				'Photo' => 'Image'
			); /* An image is not a simple database field like date or author, but has it's own database table. By using the $has_one array, we create a relationship between the StaffPage table and the Image table by storing the ID of the respective Image in  the StaffPage table */

		public function getCMSFields(){
			$fields = parent::getCMSFields();
			$fields->addFieldToTab('Root.Images', new UploadField('Photo'));

			return $fields;
		}

	}

	class StaffPage_Controller extends Page_Controller{


	}

?>