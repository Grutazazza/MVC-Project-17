<?php
$title = "Авторизация в система";
$css = [
    'main.css'
];
@include_once 'header.php'?>
    <form action="login" method="POST">
        <input type="text" name="comment" placeholder="Укажите коментарий:" required>
        <input type="submit" value="создать">
    </form>
<?php @include_once 'footer.php';?>