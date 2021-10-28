<?php
include 'app/require.php';

$user = new UserController;

Session::init();

if (Session::isLogged()) { Util::redirect('/'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $error = $user->registerUser($_POST); }

Util::head('register');
Util::navbar();

?>

<link rel="stylesheet" href="<?php SITE_ROOT ?>/assets/css/custom.css" />
		<div class="main">
					<h4 class="card-title text-center">new user</h4>
					<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
							<input type="text" placeholder="user" name="username" minlength="3" required>
							<input type="password" placeholder="pass" name="password" minlength="4" required>
							<input type="password" placeholder="confirm pass" name="confirmPassword" minlength="4" required>
							<input type="text" placeholder="invite" name="invCode" required>
                            <input type="submit" value="submit">
					</form>
				</div>
			</div>
		</div>

	</div>

</main>

<script src="<?php SITE_ROOT ?>/assets/js/matchPass.js"></script>
<?php Util::footer(); ?>