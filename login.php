<?php
include 'app/require.php';

$user = new UserController;

Session::init();

if (Session::isLogged()) { Util::redirect('/index.php'); }
if ($_SERVER['REQUEST_METHOD'] === 'POST') { $error = $user->loginUser($_POST); }

Util::head('login');
Util::navbar();

?>

		<div class="main">
					<h4 class="card-title text-center">enter</h4>
					<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
							<input type="text" placeholder="user" name="username" required>
							<input type="password" placeholder="pass" name="password" required>
                            <input type="submit" value="submit">
					</form>

		</div>

	</div>

</main>

<?php Util::footer(); ?>
