<?php
include 'databaseconnect.php';



	$catname = $_POST['catname'];
	
	if($catname !=''){
		
		$sql = "INSERT INTO trkanter_db.categorie (idCategorie, Naam) VALUES ((SELECT dt.number FROM
			(SELECT max(idCategorie)+1 AS number FROM trkanter_db.categorie)
			AS dt), '" . $catname . "')";
		$conn->query($sql);
		
	}
	else {
		echo "Vul alle velden volledig in!";
	}


$conn->close();

?>
