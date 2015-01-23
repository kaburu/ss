<header class="header" role="banner" style="border:1px solid blue">
	<div class="inner">
		<div class="unit size4of4 lastUnit" style="">
			<a href="$BaseHref" class="brand" rel="home">
				<h1>$SiteConfig.Title</h1>
				<% if $SiteConfig.Tagline %>
				<p>$SiteConfig.Tagline</p>
				<% end_if %>
			</a>
			<% if $SearchForm %>
				<span class="search-dropdown-icon">L</span>
				<div class="search-bar" id="mainsearch">
					$SearchForm <%-- <i class="fa fa-search fa-2x"></i> --%>
				</div>
			<% end_if %>
			<% include Navigation %>
		</div>
	</div>


</header>
