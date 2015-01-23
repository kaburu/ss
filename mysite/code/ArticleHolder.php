<?php
	class ArticleHolder extends Page{
		private static $allowed_children = array('ArticlePage');

		private static $icon = "themes/simple/images/icons/news-icon.png";

		static $description = 'This is the parent page of all the articles!'; 

	}

	class ArticleHolder_Controller extends Page_Controller{


	}

?>