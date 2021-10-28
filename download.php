<?php

require_once 'app/require.php';
require_once 'app/controllers/CheatController.php';

$user = new UserController;
$cheat = new CheatController;

Session::init();

if (!Session::isLogged()) { Util::redirect('/login.php'); }
Util::banCheck();

$cheat = Util::randomCode(20);

header('Content-type: application/x-dosexec');
header('Content-Disposition: attachment; filename="'.$cheat.'".exe"');
readfile();