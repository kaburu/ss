<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h2> $Title (Page Title) </h2>
		$Content (Page Content)
		<div class="content" style="border:1px dotted blue;">  $Content (More content)</div>
		<% loop $Children %> <%-- Allows us to iterate Children of a page --%>
			
			<% include ArticleTeaser %>

		<% end_loop %>
			$Form;
</article>
