<?php

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

