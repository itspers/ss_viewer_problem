<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>
	</article>
		$Form
		$CommentsForm
</div>

<div>

	<ul>
		<% loop $menuList %>
			<% include TreeItem %>
		<% end_loop %>
	</ul>

</div>