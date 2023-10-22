<?php

$sql = "select * from site";
$res = $mysqli -> query($sql);
$row = $res->fetch_object(); 

print "<h5>$row->sobre_nos</h5>";
?>