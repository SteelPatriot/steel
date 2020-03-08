<?php


echo '
<br>
<form action="" method="post" >
   <input type="text" name="site_name">
   <input type="text" name="site_url">
   <input type="text" name="coment">
<input type="submit" value="Выполнить запрос" name="theme" >
</form>' ;

if(isset($_POST["theme"])){
    if(!empty($_POST["site_name"])&!empty($_POST["site_url"])&!empty($_POST["coment"])) {

        echo $_POST["site_name"];
        echo $_POST["site_url"];
        echo $_POST["coment"];
    }

}