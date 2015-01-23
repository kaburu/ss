<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h2> $Title</h2>
		<div class="content"> $Content </div>
	</article>

	<%-- Now lets loop through the children of this Page (StaffHolder) --%>
	<% loop $Children %>
		<article>
			<h3> <a href="$Link" title="" > $Title </a> </h3>
			
			<span style="border:1px dotted green; float:left;margin-right:7px;"><a href=" $Link" style="text-decoration:none; "> $Photo.setWidth(150) </a></span>

			<p> $Content.FirstParagraph </p>
			<a href="$Link" title="Read more on &quot;{$Title}&quot;">Read more &gt;&gt;</a>
        </article>
        <p> Some extras </p>
        <% loop $Menu(1) %>
        	<p> Menu 2 is:: $Menu(2) </p>
        <% end_loop %>
        <hr style="height:1px; background-color:green; color:green;">
	<% end_loop %>
</div>