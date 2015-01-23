<?php
	class Student extends DataObject{
		private static $db = array( //FieldName=>VariableType
			'Name'=>'Varchar',
			'University'=>'Varchar'
			);

		private static $has_one = array(//RelationName=>TableName
			'Project'=>'Project'
			);


		function getInfo() {
        return $this->renderWith('StudentInfo');
    }

	}



?>