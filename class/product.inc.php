<?php
class Product {
	public $id;
	public $name;
	public $desc;
	public $price;
	public $img;
	public $category;
}
include '../class/databaseconnect.php';

function getProductsByCategory($catid){
	include 'databaseconnect.php';
	
	$products1 = array();
	
	$sql = "SELECT p.idProduct, p.Naam, p.Beschrijving, p.Prijs, p.Afbeelding, c.Naam as Categorie FROM trkanter_db.product AS p
		JOIN trkanter_db.categorie AS c on p.Categorie_idCategorie = c.idCategorie WHERE c.idCategorie = " . $catid . " ORDER by p.idProduct asc;";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$prod = new Product();
			;
			$prod->id = $row["idProduct"];
			$prod->name = $row["Naam"];
			$prod->desc = $row["Beschrijving"];
			$prod->price = $row["Prijs"];
			$prod->img = $row["Afbeelding"];
			$prod->category = $row["Categorie"];
			array_push($products1, $prod);
			 
		}
	}
	$conn->close();
	return $products1;
	
}

function getProductsBySearch($search){
    include 'databaseconnect.php';

    $products3 = array();

    $sql = "SELECT p.idProduct, p.Naam, p.Beschrijving, p.Prijs, p.Afbeelding, c.Naam as Categorie FROM trkanter_db.product as p JOIN trkanter_db.categorie AS c on p.Categorie_idCategorie = c.idCategorie WHERE p.Naam like '%". $search ."%';";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $prod = new Product();
            ;
            $prod->id = $row["idProduct"];
            $prod->name = $row["Naam"];
            $prod->desc = $row["Beschrijving"];
            $prod->price = $row["Prijs"];
            $prod->img = $row["Afbeelding"];
            //$prod->category = $row["Categorie"];
            array_push($products3, $prod);

        }
    }
    $conn->close();
    return $products3;

}

function getProduct($id){
	include 'databaseconnect.php';
	
	$products2 = array();
	
	$sql = "SELECT p.idProduct, p.Naam, p.Beschrijving, p.Prijs, p.Afbeelding, c.Naam as Categorie FROM trkanter_db.product AS p
		JOIN trkanter_db.categorie AS c on p.Categorie_idCategorie = c.idCategorie ORDER by p.idProduct asc;";
	
	$result = $conn->query($sql);
	
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$prod = new Product();
			
			$prod->id = $row["idProduct"];
			$prod->name = $row["Naam"];
			$prod->desc = $row["Beschrijving"];
			$prod->price = $row["Prijs"];
			$prod->img = $row["Afbeelding"];
			$prod->category = $row["Categorie"];
			array_push($products2, $prod);
			 
		}
	}
	$conn->close();
	foreach ($products2 as $p){
		if($p->id == $id){
			return $p;
		}
	}
}
?>