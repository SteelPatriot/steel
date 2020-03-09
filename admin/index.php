<?php



$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=localhost;dbname=steel;charset=utf8";
try {
    $pdo = new PDO($dsn, "root", "", $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


$sql = "INSERT INTO theme (theme_name, theme_url, theme_coment) VALUES (:theme_name, :theme_url, :theme_coment)";
$statment = $pdo->prepare($sql);
$statment -> bindParam(":theme_name", "steel");
$statment -> bindParam(":theme_url", "theme/steel/");
$statment -> bindParam(":theme_coment", "steel");
$statment -> execute();
echo $_POST['coment'];





if(isset($_POST["site_url"])){
    if(!empty($_POST["theme_name"])&!empty($_POST["theme_url"])&!empty($_POST["coment"])) {

        //$linc = $core->db($host, $user, $password, $database);
        // prepare()
        // $theme_name = $_POST["theme_name"];
        //$theme_url = $_POST["theme_url"];
        //$coment = $_POST["coment"];
        //$this->dataInfo = require_once "../config_core.php";
        //$dsn = 'mysql:host=localhost;dbname=steel;charset=utf8';
        //$pdo = new PDO($dsn, "root", "", array(PDO::ATTR_PERSISTENT => true));
        //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//        $lincDB = $pdo->prepare("INSERT INTO theme(theme_name, theme_url, theme_coment) VALUES (:theme_name, :theme_url, :theme_coment)");
        //$lincDB->bind_param('sss', $theme_name, $theme_url, $coment);
        //      $lincDB->execute(array($theme_name, $theme_url, $coment));
        //    $lincDB->commit();

        //INSERT INTO `theme`(`id`, `theme_name`, `theme_url`, `theme_coment`) VALUES ([value-1],[value-2],[value-3],[value-4])



    }

}

echo '
<br>
<form action="" method="post" >
   <input type="text" name="theme_name">
   <input type="text" name="theme_url">
   <input type="text" name="coment">
<input type="submit" value="Выполнить запрос" name="theme" >
</form>' ;

