<?php
session_start();

$_SESSION['themeName'] = 'steel';

require_once "../core/Core.php";
//use SteelCore;
$core = new Core();

$core->deamonTheme($_SESSION['themeName']);


echo '
<br>
<form action="actions.php" method="post" >
   <input type="text" name="theme_name">
   <input type="text" name="theme_url">
   <input type="text" name="coment">
<input type="submit" value="Выполнить запрос" name="theme" >
</form>' ;


require_once "../theme/steel/theme.php";