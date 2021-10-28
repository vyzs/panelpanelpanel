<body>

	<nav class="titlebar">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">

					<!-- Check if logged in --> 
					<?php if (Session::isLogged() == true) : ?>
					
						<li class="nav-item">
							<a class="nav-link" href="/index.php">index</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/profile.php">account</a>
						</li>

						<!-- Check if admin --> 
						<?php if (Session::isAdmin() == true) : ?>
							
							<li class="nav-item">
								<a class="nav-link" href="/admin">admin</a>
							</li>

						<?php endif; ?>

						<li class="nav-item">
							<a class="nav-link" href="/logout.php">exit</a>
						</li>

					<?php else : ?>

						<li class="nav-item">
							<a class="nav-link" href="/login.php">log in</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="/register.php">register</a>
						</li>

					<?php endif; ?>

				</ul>

			</div>

		</div>

	</nav>