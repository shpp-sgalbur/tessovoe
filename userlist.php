<head>
	<meta charset="utf-8">
	<title>Read in english</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	
<?php
if(md5($_SERVER['PHP_AUTH_PW'])!="81dc9bdb52d04dc20036dbd8313ed055" || md5($_SERVER['PHP_AUTH_USER'])!="21232f297a57a5a743894a0e4a801fc3"){


    header('WWW-Authenticate: Basic realm="administration region"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}
//Подключаемся к серверу
include "server_connect.php";
$query = "SELECT * FROM users;";
$result =  mysql_query($query);
$num_rows = mysql_num_rows($result);
echo "Количество зарегистрированных пользователей : $num_rows \n";
?>

