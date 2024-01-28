<h2><b>Trabalhe Conosco</b></h2>

<?php
$sql = "select * from site";
$res = $mysqli -> query($sql);
$row = $res->fetch_object(); 

print "<h5>$row->trabalhe_conosco</h5>";
?>