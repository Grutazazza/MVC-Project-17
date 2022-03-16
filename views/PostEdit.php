<?php
$title = "Авторизация в система";
$css = [
    'main.css'
];
@include_once 'header.php'?>
    <form action="login" method="POST">
        <input type="text" name="user_id" placeholder="Укажите логин:" required>
        <input type="text" name="name" placeholder="Укажите логин:" required>
        <input type="text" name="descriptions" placeholder="Укажите логин:" required>
        <input type="text" name="keywords" placeholder="Укажите логин:" required>
        <input type="submit" value="Войти">
    </form>
<?php @include_once 'footer.php';?>