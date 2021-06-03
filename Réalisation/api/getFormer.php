<?php

$dbh = new PDO("mysql:host=localhost;dbname=Formers","root","12345");

$sql = "SELECT * FROM Former";
$getFormerQuery = $dbh -> query($sql);
$getFormer = $getFormerQuery -> fetchAll(PDO::FETCH_ASSOC);

print_r(json_encode($getFormer));

?>