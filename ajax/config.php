<?php
/* Database Connect */
#$db = new PDO('mysql:host=localhost;dbname=hackhaton', "root", "Peacher01");

session_start();

$db = new PDO('mysql:host=127.0.0.1;dbname=hackathon', "root", "1234");

function MySqlQuery($q, $params, $return = "", $TekSatir = "") {
  global $db;
  $stmt = $db->prepare($q);
  $stmt->execute($params);
  if ($return == "rows") {
    return $stmt->fetchAll();
  }elseif ($return == "count") {
    return $stmt->rowCount();
  }elseif ($return == "datatable") {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }elseif ($return == "OneValue") {
    $Value = $stmt->fetch();
    return $Value[$TekSatir];
  }
}

if(isset($_SESSION['login'])) {
    if(!$_SESSION['login']) {
        if(strpos($_SERVER['REQUEST_URI'], "ajax") === False){
            header('Location: /login.php');
        }
    }
} else {
    if(strpos($_SERVER['REQUEST_URI'], "ajax") === False){
        header('Location: /login.php');
    }
}

