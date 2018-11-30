<?php
require 'config.php';
if(!is_null($_POST["signup-ad"])){$PName = $_POST["signup-ad"];}else{ print("Error 01"); die(); }
if(!is_null($_POST["signup-soyad"])){$PSurname = $_POST["signup-soyad"];}else{ print("Error 02"); die(); }
if(!is_null($_POST["signup-tc"])){$PTC = $_POST["signup-tc"];}else{ print("Error 03"); die(); }
if(!is_null($_POST["example-datepicker4"])){$PBirthday = $_POST["example-datepicker4"];}else{ print("Error 04"); die(); }
if(!is_null($_POST["signup-telefon"])){$PPhone = $_POST["signup-telefon"];}else{ print("Error 05"); die(); }
if(!is_null($_POST["signup-email"])){$PEmail = $_POST["signup-email"];}else{ print("Error 06"); die(); }
if(!is_null($_POST["signup-password"])){$PPassword = $_POST["signup-password"];}else{ print("Error 07"); die(); }

$row = $db->query('SELECT * FROM Users WHERE signup-tc='.$PTC."' or email='".$PEmail)->fetch();
echo count($row);