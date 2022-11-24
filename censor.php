<?php
var_dump($_GET);

$paragraph = $_GET["paragraph"];
$badword = $_GET["badword"];
echo $paragraph;
echo strlen ($paragraph);
echo str_replace ($badword,"***",$paragraph);
?>
