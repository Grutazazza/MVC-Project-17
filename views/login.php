<?php
$title = "Авторизация в система";
$css = [
    'main.css'
];
@include_once 'header.php'?>
<form action="login" method="POST">
    <input type="text" name="login" placeholder="Укажите логин:" required>
    <input type="password" name="password" placeholder="Укажите пароль:" required>
    <input type="submit" value="Войти">
</form>
<?php @include_once 'footer.php';?>