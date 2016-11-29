<?php
ob_start();
setcookie("visited", 'yes', time() + 3600);
header('Location: http://testotakoi:81/index.php');
header('Content-Type: text/plain; charset=windows-1251');
