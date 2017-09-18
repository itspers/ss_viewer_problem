<li>
    <span>$Title</span>
	<% if $Children %>
        <ul>
			<% loop $Children %>
				<% include TreeItem %>
			<% end_loop %>
        </ul>
	<% end_if %>
</li>