<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h2> $Title </h2>
		<div class="content">
			$Content
			<table>
				<thead>
					<tr> 
						<th> Project </th>
						<th> Students </th>
						<th> Mentors </th>
					</tr>
				</thead>
				<tbody>
					<% loop $Children %>
						<tr>
							<td> <a href="$Link"> $Title </a></td>

							<td>
								<% loop $Students %>
									$Info
								<% end_loop %>
							</td>

							<td>
								<% loop $Mentors %>
									$Name <% if $Last != 1 %>, <% end_if %>
								<% end_loop %>
							</td>
						</tr>
					<% end_loop %>
				</tbody>
			</table>
		</div>

	</article>
</div>