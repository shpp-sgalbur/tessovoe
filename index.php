<?php
if(md5($_SERVER['PHP_AUTH_PW'])!="81dc9bdb52d04dc20036dbd8313ed055" || md5($_SERVER['PHP_AUTH_USER'])!="21232f297a57a5a743894a0e4a801fc3"){


    header('WWW-Authenticate: Basic realm="administration region"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}


$url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/userlist.php";
Header("Location: http://".$url);



?>
