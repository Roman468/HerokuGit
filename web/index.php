<?php
//session_destroy();
//if(session_status()==  PHP_SESSION_ACTIVE){  session_destroy(); }
session_start();
include "info.php";
$userIs =false;
if (isset($_SESSION['userName'])){
    if (strlen($_SESSION['userName'])>0){
        $userIs =true;
    }
}


if ( $userIs )   {
    echo "Здравствуйте - " . $_SESSION['userName'] ;
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


