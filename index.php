<?php
require_once "core/Core.php";
require_once "config_core.php";
$core = new Core();
$linc = $core->db($host, $user, $password, $database);

require_once "./theme/steel/theme.php";

print_r(PDO::getAvailableDrivers());