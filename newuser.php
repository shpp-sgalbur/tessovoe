<head>
	<meta charset="utf-8">
	<title>Read in english</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<?php
$firstname = $lastname = $tel = $email = $balance = '';
$_POST['err']['firstname'] = $_POST['err']['lastname'] = $_POST['err']['tel'] = $_POST['err']['email'] = '';
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
    if(isset($_POST['tel']) && !preg_match('/^\\+?\d{10,13}$/', $_POST['tel'])){
        $_POST['err']['tel'] = "<span class='form__error'>Это поле должно содержать только цифры (от 10 до 13), а также в начале может содержать знак + в начале</span>";
    }
    if(isset($_POST['email']) && !preg_match('/^\w+([\.\w]+)*\w@\w((\.\w)*\w+)*\.\w{2,3}$/', $_POST['email'])){
        $_POST['err']['email'] = "<span class='form__error'>Это поле должно содержать E-Mail в формате example@site.com</span>";
    }
    if(isset($_POST['balance']) && !preg_match('/^-?\d?$/', $_POST['balance'])){
        $_POST['err']['balance'] = "<span class='form__error'>Это поле должно содержать только цифры, а также может начинаться с минуса</span>";
    }
    
    if ($_POST['povtor']){
        
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
            <input type="text" name="tel" value = "$tel">
            {$_POST['err']['tel']}
        </p>
        <p><b>Е-мейл:</b><Br>
            <input type="text" name="email" value = "$email" required>
            {$_POST['err']['email']}
        </p>
        <p><b>Баланс:</b><Br>
            <input type="text" name="balance" value = "$balance" required>
            {$_POST['err']['balance']}
        </p>
        <br>
        <input type="submit" name="savebtn" value="Сохранить">
        <input type="hidden" name="povtor" value="0">
    </form>
FORM;
echo $form;
?>
