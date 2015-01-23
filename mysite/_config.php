<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '',
	"database" => 'SS_mysite',
	"path" => '',
);

// Set the site locale
i18n::set_locale('en_US');

//allow full text search
FulltextSearchable::enable();

HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');

//recover password
Security::setDefaultAdmin('admin', 'password');

//set environment to dev mode
Director::set_environment_type("dev");


// Log errors
SS_Log::add_writer(new SS_LogFileWriter(BASE_PATH . '/mysite/logs/log.txt'), SS_Log::ERR);