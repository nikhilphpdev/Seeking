<?php 
$filename = "../".$_GET["filename"];
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' .basename($filename) . '";');
readfile ($filename);
exit;