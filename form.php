<?php

/*echo $_POST['username'];
echo '<br />';
echo gettype($_POST);
$num  = 45;
$string = 'hello';
echo '<br />' . $num . $string;

const io = 89;

echo io;

$arr = array(1,3,'5', 9, 0,0);
echo '<br />';
echo count($arr); */// как ленгс



$email = $_POST['email'];
$pass =  $_POST['pass'];

header('Location: index.php');
$pass = md5($pass);
$file = fopen("text.txt", 'w');


fwrite($file, "\nemail - " . $email . "\nПароль - " . $pass);

fclose($file);



exit;
?>