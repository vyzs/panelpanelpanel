<!--Admin navigation-->

<!-- Check if admin // This is not important really.-->
<?php if (Session::isAdmin()) : ?>
			<a href='index.php' class="btn btn-outline-primary btn-sm">mt</a> |
			<a href='users.php' class="btn btn-outline-primary btn-sm">users</a> |
			<a href='invites.php' class="btn btn-outline-primary btn-sm">invites</a> |
			<a href='sub.php' class="btn btn-outline-primary btn-sm">subs</a>
		</div>
	</div>
<?php endif; ?>