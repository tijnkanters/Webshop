<?php include_once '../class/databaseconnect.php'; ?>
<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Product {
	public $id;
	public $name;
	public $desc;
	public $price;
	public $img;
	public $category;
}

$products = array();

$sql = "SELECT p.idProduct, p.Naam, p.Beschrijving, p.Prijs, p.Afbeelding, c.Naam as Categorie FROM trkanter_db.product AS p
		JOIN trkanter_db.categorie AS c on p.Categorie_idCategorie = c.idCategorie ORDER by p.idProduct asc;";

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
       array_push($products, $prod);
       
    }
} 
$conn->close();

function getProduct($id, $products){

	foreach ($products as $p){
		if($p->id == $id){
			return $p;
		}
	}
}

?>