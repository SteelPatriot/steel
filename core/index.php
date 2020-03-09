<?php
session_start();
$_SESSION['themeName'] = 'steel';
require_once "../core/Core.php";
$core = new Core();

require_once "../".$core->deamonTheme($_SESSION['themeName'])."theme.php";