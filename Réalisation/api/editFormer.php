<?php
$id = $_POST["id"];
$dbh = new PDO("mysql:host=localhost;dbname=Formers","root","12345");
$sql = "UPDATE Former SET Firstname = :Firstname,Lastname = :Lastname,Matricule = :Matricule,Email = :Email WHERE id = $id";
$addFormerQuery = $dbh->prepare($sql);
$addFormerQuery->bindParam(":Firstname",$_POST["Firstname"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Lastname",$_POST["Lastname"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Matricule",$_POST["Matricule"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Email",$_POST["Email"],PDO::PARAM_STR);

$addFormerQuery->execute();
?>
