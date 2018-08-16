<?php

/* 
 * Проверяем правильность заполнения полей формы
 */
    if(isset($_POST['firstname']) && !preg_match('/^[a-zа-яё]+(?: [a-zа-яё]+)?$/i', $_POST['firstname'])){
        $_POST['err']['firstname'] = "<span class='form__error'>Это поле должно содержать только буквы</span>";
        $_POST['povtor']=1;
    }
    if(isset($_POST['lastname']) && !preg_match('/^[a-zа-яё]+(?: [a-zа-яё]+)?$/i', $_POST['lastname'])){
        $_POST['err']['lastname'] = "<span class='form__error'>Это поле должно содержать только буквы</span>";
        $_POST['povtor']=1;
    }
    if(isset($_POST['tel']) && !preg_match('/^\\+?\d{10,13}$/', $_POST['tel'])){
        $_POST['err']['tel'] = "<span class='form__error'>Это поле должно содержать только цифры (от 10 до 13), а также в начале может содержать знак + в начале</span>";
        $_POST['povtor']=1;
    }
    if(isset($_POST['email']) && !preg_match('/^\w+([\.\w]+)*\w@\w((\.\w)*\w+)*\.\w{2,3}$/', $_POST['email'])){
        $_POST['err']['email'] = "<span class='form__error'>Это поле должно содержать E-Mail в формате example@site.com</span>";
        $_POST['povtor']=1;
    }
    if(isset($_POST['balance']) && !preg_match('/^-?\d*$/', $_POST['balance'])){
        $_POST['err']['balance'] = "<span class='form__error'>Это поле должно содержать только цифры, а также может начинаться с минуса</span>";
        $_POST['povtor']=1;
    }

