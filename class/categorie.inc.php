<?php include_once '/class/databaseconnect.php'; ?>
<?php
$sql = "SELECT c.Naam FROM trkanter_db.categorie AS c";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $rows = [];
    while($row = mysqli_fetch_array($result))
    {
        $rows[] = $row;
    }
}
$conn->close();
?>