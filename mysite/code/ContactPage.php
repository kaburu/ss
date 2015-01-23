<?php 
	class ContactPage extends Page{
		static $db = array(
			'Mailto' => 'Varchar(100)',
			'SubmitTxt' => 'Text'
			);

		function getCMSFields(){
			$fields = parent::getCMSFields();
			$fields->addFieldToTab("Root.OnSubmission", new TextField('Mailto', 'Email submissions to'));
			$fields->addFieldToTab("Root.OnSubmission", new TextareaField('SubmitTxt', 'Text on Submission')); 
			// $fields->addFieldToTab("Root.OnSubmission", new HTMLEditorField('SubmitTxt', 'Text on Submission')); 

			return $fields;

		}

	}

	class ContactPage_Controller extends Page_Controller{
		//To get silverstripe to generate a form, we need a function here, which will

		//add our form function to the allowed_actions array
		static $allowed_actions = array(
				'ContactForm'
			);

		function ContactForm(){
			//create fields
			$fields = new FieldList (
				new TextField('Name', 'Name*'),
				new EmailField('Email','Email*'),
				new TextareaField('Comments','Comments*')
				);

			//create action 
			$actions = new FieldList(
					new FormAction('SendContactForm', 'Send')
				);

			//create validators
			$validator = new RequiredFields('Name', 'Email', 'Comments');

			return new Form($this, 'ContactForm', $fields, $actions, $validator);

			//Now when we call $ContactForm from a template, silverstripe will generate the form above and place it there

		}//END ContactForm

		function SendContactForm($data, $form){
			//set data
			$From = $data['Email'];
			$To = $this->Mailto;
			$subject = "Website Contact Message";
			$email = new Email($From, $To, $subject);

			//set template
			$email->setTemplate('ContactEmail');

			//populate template
			$email->populateTemplate($data);

			//send mail
			$email->send();

			//return to submitted message
			$this->redirect($this->Link("?success=1"));

		}

		 public function Success(){

		 	//The function only returns if success isset and == 1
	        return isset($_REQUEST['success']) && $_REQUEST['success'] == "1";
	    }

	}//END CONTROLLER
