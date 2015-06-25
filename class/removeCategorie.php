<?php
include 'databaseconnect.php';



$id = $_POST['id'];

$sql = "DELETE FROM trkanter_db.categorie WHERE idCategorie = '". $id . "'";

$conn->query($sql);
$conn->close();





header('Location: ../pages/adminCategorie.php');

?>
