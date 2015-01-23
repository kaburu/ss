<!DOCTYPE html>

<html lang="$ContentLocale">


<html>
	<head> 
	<% base_tag %>
	<%-- <title>
		<% if $MetaTitle %>
			$MetaTitle
		<% else %>
			$Title
		<% end_if %> 
		&raquo; $SiteConfig.Title
	</title> --%>


	<title>
		$Title 
		&raquo; $SiteConfig.Title 
	</title>

	$MetaTags(false)
	<link rel="shortcut icon" href="/favicon.ico" />
	<%-- Put universal style sheets here --%>

	<% require themedCSS('bootstrap.min') %>
	<% require themedCSS('font-awesome.min') %>
	<% require themedCSS('typography') %>
	<% require themedCSS('form') %>
	<% require themedCSS('layout') %>
	
	
	

	</head>

	<body> 
	<% include Header %>

		
			<div class="main" role="main">
			<p> START Universal Content </p>
				<div>
					$Layout
				</div>
					<hr>

			<p> END Universal Content </p>
			</div>	
	<% include Footer %>
	</body>
</html>