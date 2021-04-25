<?php
header('Content-Type: text/json');
$url = "https://covid19.saglik.gov.tr/";
$source = file_get_contents($url);
$temp = explode("var sondurumjson = ", $source);
$temp = explode(";//]]>", $temp[1]);
$json = str_replace(array("[", "]"), array("", ""), $temp[0]);
print_r($json);
?>