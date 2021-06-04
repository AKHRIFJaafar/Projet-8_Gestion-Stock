<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost;dbname=schoolstd","root","12345");
$sql = "UPDATE Former SET Firstname = :Firstname,Lastname = :Lastname,Matricule = :Matricule,Email = :Email WHERE id = $id";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":name",$_POST["name"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":fathername",$_POST["fathername"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":rollno",$_POST["rollno"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":degree",$_POST["degree"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":branch",$_POST["branch"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
