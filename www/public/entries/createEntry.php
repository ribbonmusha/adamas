<?php
session_start();

$filePath = "/app/data/data.json";
$jsonData = file_get_contents($filePath);
$jsonArr = json_decode($jsonData, true);

$arr = null;

if (is_null($jsonArr)) {
    $arr = [];
} else {
    $arr = $jsonArr;
}

$_SESSION['isExisted'] = false;
if (array_key_exists($_POST['nim'], $arr)) {
    $_SESSION['isExisted'] = true;
    goto jumpValue;
}
   
$arr[$_POST['nim']] = $_POST;
$jsonData = json_encode($arr, JSON_PRETTY_PRINT);
$file = fopen($filePath, "w");
fwrite($file, $jsonData);
fclose($file);

jumpValue:
header("Location: " . $_SERVER['HTTP_REFERER']);
?>