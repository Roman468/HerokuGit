<?php
session_start();
unset($_SESSION['userName']);
header('Location: index.php');
