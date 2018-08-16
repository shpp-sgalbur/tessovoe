<head>
	<meta charset="utf-8">
	<title>Read in english</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<?php
$id = $_GET['id'];
echo "<h1>$id</h1>";
$firstname = $lastname = $tel = $email = $balance = '';
include "server_connect.php";
$result=  queryRun("SELECT * FROM users WHERE id = `$id`;", "Ошибка при чтении данных пользователя");
$row = mysql_fetch_array($result);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $tel = $row['tel'];
    $email = $row['email'];
    $balance = $row['balance'];



$_POST['err']['firstname'] = $_POST['err']['lastname'] = $_POST['err']['tel'] = $_POST['err']['email'] = $_POST['err']['balance'] = '';
//если форма отображается повторно
if(isset($_POST['povtor']) ){

    include 'validate.php';

    if (!$_POST['povtor']){
        $query = "UPDATE users SET firstName = $firstname, lastName = $lastname, tel=$tel, email = $email,  balance = $balance WHERE `id` = $id;";

        $result = queryRun($query, "Ошибка при добавлении пользователя в БД");
        
        
        
    }
    
}

include 'userform.php';
echo $form;