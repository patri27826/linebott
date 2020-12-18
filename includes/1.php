<?php
$str = file_get_contents('a.json');
$str = json_decode($str,true);
$income = (int)$str['in'];
$expense = (int)$str['out'];
?>