<?php


echo '
<br>
<form action="" method="post">
   <input type="text" name="site_name">
   <input type="text" name="site_url">
   <input type="text" name="coment">
<input type="submit" value="Выполнить запрос">
</form>' ;

if(isset($_POST["site_name"])&isset($_POST["site_url"])&isset($_POST["coment"])){


    echo "true";


}