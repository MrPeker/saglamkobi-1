<?php

require 'config.php';
if (!is_null($_POST["signup-ad"])) {
    $PName = $_POST["signup-ad"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Name Type"));
    die();
}
if (!is_null($_POST["signup-soyad"])) {
    $PSurname = $_POST["signup-soyad"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Surname Type"));
    die();
}
if (!is_null($_POST["signup-tc"])) {
    $PTC = $_POST["signup-tc"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Tc Type"));
    die();
}
if (!is_null($_POST["example-datepicker4"])) {
    $PBirthday = $_POST["example-datepicker4"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Date Type"));
    die();
}
if (!is_null($_POST["signup-telefon"])) {
    $PPhone = $_POST["signup-telefon"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Phone Type"));
    die();
}
if (!is_null($_POST["signup-email"])) {
    $PEmail = $_POST["signup-email"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong email Type"));
    die();
}
if (!is_null($_POST["signup-password"])) {
    $PPassword = $_POST["signup-password"];
} else {
    echo json_encode(array("status" => False, "Message" => "Wrong Password Type"));
    die();
}

if ($db->query("Select COUNT(*) from Users where Tc='$PTC' OR email='$PEmail'")->fetchAll()[0][0] > 0) {
    echo json_encode(array("status" => false, "message" => "userExists"));
    die();
}
try {
    $stmt1 = $db->prepare("insert into users (name,surname,tc,birthday,phone,email,password) values ('$PName','$PSurname','$PTC','$PBirthday','$PPhone','$PEmail','$PPassword')");
    if($stmt1->execute()) {
        $_SESSION['id'] = $db->lastInsertId();
        $_SESSION['name'] = $PName;
        $_SESSION['surname'] = $PSurname;
        $_SESSION['email'] = $PEmail;
        $_SESSION['tc'] = $PTC;
        $_SESSION['tel'] = $PPhone;
        $_SESSION['birthday'] = $PBirthday;
        $_SESSION['login'] = true;

    }
} catch(Exception $e) {
    var_dump($e);
}
echo json_encode(["status" => true]);
