<?php

$dblocation = "localhost";

$dbname = "testotakoi";

$dbuser = "root";

$dbpasswd = "";

$dbcnx = mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx)
{
    echo( "<P>В настоящий момент сервер базы данных не доступен, поэтому корректное
                       отображение страницы невозможно.</P>" );
    exit();
}

if (!mysql_select_db($dbname, $dbcnx) )
{
    echo( "<P>В настоящий момент база данных не доступна, поэтому корректное
                       отображение страницы невозможно.</P>" );
    exit();
}

$type = $_POST['type'];

$name = $_POST['pname'];
$email = $_POST['pemail'];
$sait = $_POST['psait'];
$record = $_POST['precord'];
$ip = $_SERVER['REMOTE_ADDR'].' '.$_SERVER['SERVER_PORT'];
$user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
  elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
  elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
  elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  else $browser = "Невідомий раузер";

$sql = "INSERT INTO records (name, email, sait, record, ip, browser) VALUES ('$name','$email','$sait','$record' ,'$ip', '$browser')";
$result = mysql_query($sql);
?>