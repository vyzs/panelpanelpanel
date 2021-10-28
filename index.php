<?php
require_once 'app/require.php';
require_once 'app/controllers/CheatController.php';

$user = new UserController;
$cheat = new CheatController;

Session::init();

if (!Session::isLogged())
{
    Util::redirect('/login.php');
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

<div class="main">
        <div class="panel-card">
            <div class="header">
                <span>user info</span>
            </div>
				welcome back, <a href="/profile.php"><?php Util::display($username) ?> </a> [<?php Util::display($uid); ?>]
            <div class="inner">
                <div class="separator">
                    <br>
                    <span>client</span><br>
            <a href="#">download loader</a><br>
                </div>
                
                <div class="separator">
                    <br>
                    <span>discord</span><br>
                    <a href="https://discord.gg/7bkU45gyAC">discord server</a><br>
                    <br>

                    <span>information</span><br>
                    <a href="/faq">frequently asked questions</a><br>
                    <a href="/faq/tos.txt">terms of service</a><br>
                    <br>
                </div>
            </div>
            <span>you mirin' brah</span><br>
	    </div>
	</div>
</div>

    <div class="panel-card stats" style="width: 250px">
        <div class="header"><span>stats</span></div>
			users: <?php Util::display($user->getUserCount()); ?> <br>
			latest user: <?php Util::display($user->getNewUser()); ?> <br>
        <span><span>
    </div>

</main>
<?php Util::footer(); ?>
