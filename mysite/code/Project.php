<?php
	class Project extends Page{
		private static $has_many = array(
			'Students'=>'Student'
			);

		private static $many_many = array(
			'Mentors'=>'Mentor'
			);


		public function getCMSFields(){
			//get the fields form the parent implementation
			$fields = parent::getCMSFields();

			//create a default configuration for the new GridField, allowing record editing
			$config = GridFieldConfig_RelationEditor::create();

			//set the names and data for our gridfield columns
			$config->getComponentByType('GridFieldDataColumns')->setDisplayFields(array(
				'Name'=>'Name',
				'Project.Title'=>'Project'
				));

			//create a gridfield to hold the student relationship
			$studentsField = new GridField(
				'Students', //Field Name
				'Student', // Field Title
				$this->Students(), //List of all related students
				$config
				);

			// Same setup, but for mentors
	        $mentorsField = new GridField(
	            'Mentors',
	            'Mentors',
	            $this->Mentors(),
	            GridFieldConfig_RelationEditor::create()
	        );  

	        //create a tab name Students and add our field to it
			$fields->addFieldToTab('Root.Students', $studentsField);            
	        $fields->addFieldToTab('Root.Mentors', $mentorsField);

			return $fields;
		}

	}//END class Project



	class Project_Controller extends Page_Controller{


	}

?>