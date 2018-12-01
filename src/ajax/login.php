<?php
require './config.php';
if(!is_null($_POST["login-email"])){$PEmail = $_POST["login-email"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong email Type")); die(); }
if(!is_null($_POST["login-password"])){$PPassword = $_POST["login-password"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Password Type")); die(); }

$user = $db->query("Select * from Users where Password='$PPassword' and email='$PEmail'")->fetchAll();

if(empty($user[0])){
	echo json_encode(array("status"=>False,"message"=>"wrongCredentials"));
	die();
} else {
    $user = $user[0];
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['surname'] = $user['surname'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['tc'] = $user['tc'];
    $_SESSION['tel'] = $user['tel'];
    $_SESSION['birthday'] = $user['birthday'];
    $_SESSION['login'] = true;

    echo json_encode([ "status" => true ]);
}