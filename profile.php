<?php

require_once 'app/require.php';

$user = new UserController;

Session::init();

if (!Session::isLogged()) { Util::redirect('/login.php'); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if (isset($_POST["updatePassword"])) {
		$error = $user->updateUserPass($_POST);
	}


	if (isset($_POST["activateSub"])) {
		$error = $user->activateSub($_POST);
	}
}

$uid = Session::get("uid");
$username = Session::get("username");
$admin = Session::get("admin");

$sub = $user->getSubStatus();

Util::banCheck();
Util::head($username);
Util::navbar();

?>

<link rel="stylesheet" href="<?php SITE_ROOT ?>/assets/css/custom.css" />

<center>
    
<div class="main">
	<h4 class="card-title text-center">reset password</h4>
					<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
							<input type="password" placeholder="current pass" name="currentPassword" required>
							<input type="password" placeholder="new pass" name="newPassword" required>
							<input type="password" placeholder="confirm pass" name="confirmPassword" required>
                            <input type="submit" value="submit">
					</form>

				</div>
			</div>
		</div>
			</div>
		</div>
    </div>
</center>
</main>
<?php Util::footer(); ?>
