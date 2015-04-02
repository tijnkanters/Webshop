<?php
include 'databaseconnect.php';



	$prodname = $_POST['prodname'];
	$proddesc = $_POST['proddesc'];
	$prodimg = $_POST['prodimg'];
	$prodprice = $_POST['prodprice'];
	$prodcat = $_POST['prodcat'];
	
	if($prodname !=''){
		
		$sql = "INSERT INTO trkanter_db.product (idProduct, Naam, Beschrijving, Prijs, Afbeelding, Categorie_idCategorie ) VALUES ((SELECT dt.number FROM
			(SELECT max(idCategorie)+1 AS number FROM trkanter_db.categorie)
			AS dt), '" . $prodname . "', '" . $proddesc . "', '" . $prodimg . "', '" . $prodprice . "', '" . $prodcat . "' )";
		$conn->query($sql);
		
	}
	else {
		echo "Vul alle velden volledig in!";
	}


$conn->close();

?>
