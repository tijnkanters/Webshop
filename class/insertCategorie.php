<?php
include 'databaseconnect.php';



	$catname = $_POST['catname'];
    $parentid = $_POST['parent'];
	
	if($catname !=''){

        if($parentid == ''){
            $sql = "INSERT INTO trkanter_db.categorie (idCategorie, Naam) VALUES ((SELECT dt.number FROM
			(SELECT max(idCategorie)+1 AS number FROM trkanter_db.categorie)
			AS dt), '" . $catname . "')";
        }else{
            $sql = "INSERT INTO trkanter_db.categorie (idCategorie, Naam, idParent) VALUES ((SELECT dt.number FROM
			(SELECT max(idCategorie)+1 AS number FROM trkanter_db.categorie)
			AS dt), '" . $catname . "','". $parentid ."')";
        }

		$conn->query($sql);
		
	}
	else {
		echo "Vul alle velden volledig in!";
	}


    $conn->close();
    header('Location: ../pages/adminCategorie.php');

?>
