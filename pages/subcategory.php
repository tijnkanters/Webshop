<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
        <a href='/Webshop/index.php'>Home</a> -> Categorieën
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                <h1>Selecteer een subcategorie:</h1>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
    		<div class="col-md-6 col-md-offset-1" >
             <?php 
                        $cat = $_GET['category'];
                    	include_once "../class/categorie.inc.php";
                    	
                    	$catarray = array();
                    	$catarray = getCategories();
                    	foreach ($catarray as $c){
                            if($c->parentid == $cat){
                                echo "<a href='/Webshop/pages/shop.php?category=" . $c->id . "'><div class='category'>" . $c->name . "</div></a>";
                            }

                    		
                    	}
                    	
                    	?>
            </div>
            
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