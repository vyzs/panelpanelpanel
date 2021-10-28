<?php

require_once '../app/require.php';
require_once '../app/controllers/AdminController.php';

$user = new UserController;
$admin = new AdminController;

Session::init();

$username = Session::get("username");

Util::adminCheck();
Util::head('admin panel');
Util::navbar();

$userList = $admin->getUserArray();

// inv 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["genInv"])) {
		$admin->getInvCodeGen($username); 
	}
	header("location: index.php");
}

// sub 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["genSub"])) {
		$admin->getSubCodeGen($username); 
	}
	header("location: index.php");
}

// users 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST["resetHWID"])) { 
		$rowUID = $_POST['resetHWID'];
		$admin->resetHWID($rowUID); 
	}
	if (isset($_POST["setBanned"])) { 
		$rowUID = $_POST['setBanned'];
		$admin->setBanned($rowUID); 
	}
	if (isset($_POST["setAdmin"])) { 
		$rowUID = $_POST['setAdmin'];
		$admin->setAdmin($rowUID); 
	}
	header("location: index.php");
}

?>


<head>
<link rel="stylesheet" href="<?php SITE_ROOT ?>/assets/css/custom.css" />
</head>

<body>
<script>
        if (location.href.indexOf("?") != -1) {
            toastr.error(location.href.substring(location.href.indexOf("?") + 1, location.href.length).split("_").join(" ").split("=")[0]);
        }
    </script>
<div class="modal-overlay">
</div>
<div class="invites modal" style="max-height: 350px; overflow-y:scroll;">
<table style="width:100%; text-align: left;">
</table>
</div>

<div class="main">
        <div class="panel-card">
            <div class="header">
                <span>admin</span>
            </div>
                <?php Util::adminNavbar(); ?>


