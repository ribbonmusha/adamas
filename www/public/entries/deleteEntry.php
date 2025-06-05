<?php
session_start();
$filePath = "/app/data/data.json";
$jsonData = file_get_contents($filePath);
$jsonArr = json_decode($jsonData, true);

$_SESSION['isExistedDel'] = false;
if (array_key_exists($_POST['nim-del'], $jsonArr)) {
    $_SESSION['isExistedDel'] = true;
    unset($jsonArr[$_POST['nim-del']]);
}

$jsonData = json_encode($jsonArr, JSON_PRETTY_PRINT);
$file = fopen($filePath, "w");
fwrite($file, $jsonData);
fclose($file);

jumpValue:
header("Location: " . $_SERVER['HTTP_REFERER']);
?>