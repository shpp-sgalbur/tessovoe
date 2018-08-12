<head>
	<meta charset="utf-8">
	<title>Read in english</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<?php
$firstname = $lastname = $tel = $email = $balance = '';
$_POST['err']['firstname']='';
//если форма отображается повторно
if(isset($_POST['povtor']) ){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    if(isset($_POST['firstname']) && !preg_match('/^[a-zа-яё]+(?: [a-zа-яё]+)?$/i', $_POST['firstname'])){
        $_POST['err']['firstname'] = "<span class='form__error'>Это поле должно содержать только буквы</span>";
    }
    if(isset($_POST['lastname']) && !preg_match('/^[a-zа-яё]+(?: [a-zа-яё]+)?$/i', $_POST['lastname'])){
        $_POST['err']['lastname'] = "<span class='form__error'>Это поле должно содержать только буквы</span>";
    }
    
}

$form = <<<FORM
    <form action = '#' method="post">Основная Информация о пользователе
        <p><b>Имя:</b><Br>
            <input type="text" name="firstname" value = "$firstname" required>
            {$_POST['err']['firstname']}
        </p>
        <p><b>Фамилия:</b><Br>
            <input type="text" name="lastname"  value = "$lastname" required> 
            {$_POST['err']['lastname']}
        </p>
        <p><b>Телефон:</b><Br>
        <input type="text" name="tel" value = "$tel"></p>
        <p><b>Е-мейл:</b><Br>
            <input type="text" name="email" value = "$email" required>
            <span class="form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
        </p>
        <p><b>Баланс:</b><Br>
        <input type="text" name="balance" value = "$balance" required></p>
        <br>
        <input type="submit" name="savebtn" value="Сохранить">
        <input type="hidden" name="povtor" value="0">
    </form>
FORM;
echo $form;
?>
