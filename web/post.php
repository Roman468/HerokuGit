<?php
session_start();
$userName = $_POST['userName'];
echo 'Пользователь:' . $userName ;
    $_SESSION['userName'] = $userName ;
header('Location: index.php');
