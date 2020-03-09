<?php
session_start();
$_SESSION['themeName'] = 'steel';
require_once "Core.php";
$core = new Core();

require_once "../".$core->deamonTheme($_SESSION['themeName'])."theme.php";