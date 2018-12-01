<?php
require './config.php';
if(!is_null($_POST["login-email"])){$PEmail = $_POST["login-email"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong email Type")); die(); }
if(!is_null($_POST["login-password"])){$PPassword = $_POST["login-password"];}else{ echo json_encode(array("status"=>False,"Message"=>"Wrong Password Type")); die(); }

if($db->query("Select COUNT(*) from Users where Password='$PPassword' and email='$PEmail'")->fetchColumn() == 0){
	echo json_encode(array("status"=>False,"message"=>"wrongCredentials"));
	die();
}
echo json_encode([ "status" => true ]);
