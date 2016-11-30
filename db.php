<?php

$dblocation = "phptestotakoi-testjavascript.rhcloud.com";

$dbname = "testotakoi";

$dbuser = "adminSjABdQz";

$dbpasswd = "LuWCXbEvX-Da";

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
$id = $_POST['pid'];

if ($type == 'add'){

$name = strip_tags($_POST['pname']);
$email = strip_tags($_POST['pemail']);
$sait = strip_tags($_POST['psait']);
$record = strip_tags($_POST['precord']);
if ($name != '' && $email != '' && $record != '') {
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
echo '';
} else{
echo 'Заповніть усі обовязкову поля';}
}



if ($type == 'select'){
	echo  '
<table class="table table-striped table-hover">
		<tr>
			<th class="col-sm-1">ID</th>
			<th class="col-sm-2">Ім\'я</th>
			<th class="col-sm-2">E-mail</th>
			<th class="col-sm-2">Сайт</th>
			<th class="col-sm-5">Текст запису</th>
			<th class="col-sm-1"></th>
		</tr>
 ';
	$sql = "SELECT * FROM records";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>'.$row['id'].'</td>';
	if (isset($_COOKIE['visited'])) {
    echo '<td><p>'.$row['name'].'</p><p>'.$row['ip'].'</p><p>'.$row['browser'].'</p></td>';
}
else {
	echo '<td><p>'.$row['name'].'</p></td>';
}
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['sait'].'</td>';
    echo '<td>'.$row['record'].'</td>';
    if (isset($_COOKIE['visited'])) {
    echo '<td><button class="btn btn-lg btn-danger col-sm-12" onclick="deleterec('.$row['id'].')">видалити</button></td>';
	}
    echo '</tr>';
}
echo '</table>';
}

if ($type == 'delete'){
	$sql = "DELETE FROM records WHERE id='$id'";
	$result = mysql_query($sql);
	echo 'savfsbghdgnfjfndbsvdfdgbfhnjkgfdbsvfvdgbfhnjuitfndbdfgtyhtujjndbsvvdgtryujfnghdfgstry';
}
?>