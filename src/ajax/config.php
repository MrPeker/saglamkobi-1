<?php

session_start();

$db = new PDO('mysql:host=localhost;dbname=hackhaton', "root", "Peacher01");
function redirect($url, $statusCode = 303){
   header('Location: ' . $url, true, $statusCode);
   die();
}
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
//echo MySqlQuery("SELECT * FROM system_config WHERE id = ?", array(1), "OneValue" , "SystemName");
}