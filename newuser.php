<head>
	<meta charset="utf-8">
	<title>Read in english</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<?php
include "server_connect.php";
$firstname = $lastname = $tel = $email = $balance = '';
$_POST['err']['firstname'] = $_POST['err']['lastname'] = $_POST['err']['tel'] = $_POST['err']['email'] = $_POST['err']['balance'] = '';
//если форма отображается повторно
if(isset($_POST['povtor']) ){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    include 'validate.php';
    if (!$_POST['povtor']){
        $query = "INSERT INTO users(firstname, lastname, tel, email, balance, datereg) VALUES ('$firstname','$lastname','$tel','$email','$balance', NOW());";
        $result = queryRun($query, "Ошибка при добавлении пользователя в БД");
        $id = mysql_insert_id();
        $url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/useredit.php?id=$id";
        Header("Location: http://".$url);
        
    }
    
}

include 'userform.php';
echo $form;
?>
