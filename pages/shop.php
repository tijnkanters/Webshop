<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
        <?php include_once '../class/categorie.inc.php'; ?>
        <a href='/Webshop/index.php'>Home</a> -> <a href='/Webshop/pages/category.php'>Categorieën</a> -> <?php echo getCategorie($_GET['category'])->name ?>
    		<div class="col-md-10-offset-2">
                <h1>Shop</h1>
                
               <?php include_once '../class/product.inc.php';
               $products = array();
               $products = getProductsByCategory($_GET['category'], $conn);
               if(empty($products)){
               	echo '<h3>Na erg veel speurwerk hebben we hier geen fietsbellen kunnen vinden.
                		</h3><p>Er is iets mis gegaan. Klik <a href="/Webshop/index.php">hier</a> om terug te gaan.</p>';
               }
				foreach ($products as $p){
					echo '<div class="col-md-5 productDiv">';
					echo '<a href="product.php?id=' . $p->id . '">';
					echo '<br>';
					echo '<img src="/Webshop/img/' . $p->img . '" style="width: 100px; height: 100px; border:3px solid gray;">';
					
					echo '<h3>' . $p->name . '</h3>';
					
					echo '<p>' . $p->desc . '</p>';
					echo '<h4>&euro;' . $p->price . '</h4>';
					echo '<br>';
					echo '</a></div>';
					
				}
				?>
            </div>
      </div>
      </div>



<?php include_once 'footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>