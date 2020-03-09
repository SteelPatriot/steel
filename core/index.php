<?php
session_start();
$_SESSION['themeName'] = 'steel';
require_once "core/Core.php";
$core = new Core();
//define("urlTheme", $core->deamonTheme($_SESSION['themeName']));

require_once "theme/steel/theme.php";