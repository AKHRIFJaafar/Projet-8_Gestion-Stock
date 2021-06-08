<?php
$id = $_POST["id"];
$dbh = new PDO("mysql:host=localhost;dbname=Formers", "root", "12345");
$sql = " DELETE FROM Former WHERE id = $id ";
$getFormer = $dbh->prepare($sql);
$getFormer->execute();

?>
