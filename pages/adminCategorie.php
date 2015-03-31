<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>


<?php
if(isset($_REQUEST['add']))
{
	addCategorie();
}

function addCategorie($naam){
	include 'databaseconnect.php';
	
	$sql = "INSERT INTO trkanter_db.categorie (id, x) VALUES ((SELECT dt.number FROM 
			(SELECT max(idCategorie)+1 AS number FROM trkanter_db.categorie) 
			AS dt), '" . $naam . "')";
	
	$conn->query($sql);
}

?>


<div class="block">
    <div class="container">
        <?php
        if(!isset($_SESSION['gebruiker'])){
            header('Refresh: 3; url=/Webshop/index.php');
            echo 'Toegang geweigerd!';
            exit();
        }
        if($_SESSION['gebruiker'] != "admin")
        {
            header('Refresh: 3; url=/Webshop/index.php');
            echo 'Toegang geweigerd!';
            exit();
        }
        ?>
        Beheerpagina Categoriën
    </div>
</div>


<?php include_once 'footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>