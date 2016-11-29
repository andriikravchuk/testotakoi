<?php
ob_start();
setcookie("visited", '', time() - 30);
header('Location: http://testotakoi:81/index.php');
header('Content-Type: text/plain; charset=windows-1251');

