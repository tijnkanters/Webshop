
<?php
class Categorie {
	public $id;
	public $name;
}

function getCategories(){
include 'databaseconnect.php';

$categories = array();

$sql = "SELECT c.idCategorie, c.Naam FROM trkanter_db.categorie AS c ORDER BY idCategorie;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {
			$cat = new Categorie();
			
			$cat->id = $row["idCategorie"];
			$cat->name = $row["Naam"];

			array_push($categories, $cat);
			 
		}
	}
	$conn->close();
	return $categories;


}


?>