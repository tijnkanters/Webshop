<?php include_once '/class/databaseconnect.php'; ?>
<?php 
$sql = "SELECT p.idProduct, p.Naam, p.Beschrijving, p.Prijs, p.Afbeelding, c.Naam as Catagorie FROM trkanter_db.product AS p
		JOIN trkanter_db.categorie AS c on p.Categorie_idCategorie = c.idCategorie;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id = $row["idProduct"];
       $name = $row["Naam"];
       $desc = $row["Beschrijving"];
       $price = $row["Prijs"];
       $img = $row["Afbeelding"];
       $catagory = $row["Catagorie"];
    }
} 
$conn->close();
?>