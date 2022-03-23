<?php
//session_destroy();
//if(session_status()==  PHP_SESSION_ACTIVE){  session_destroy(); }
session_start();


include "info.php";
if (isset($_SESSION['userName']))   {
    echo "Здравствуйте " . $_SESSION['userName'] ;
    echo "<br><a href='exit.php'>Exit</a>";
}
else {
?>
<form action="post.php" method="post">
    <label>Введите имя пользователя:
        <input type="text" name="userName">
    </label>
    <input type="submit" value="Отправить">
</form>
<?php
}
?>


