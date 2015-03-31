<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                <h1>Selecteer een catagorie:</h1>
            </div>
        </div>
        <div class="row" style="margin-top:50px;">
    		<div class="col-md-3 col-md-offset-1" >
             <?php 

                    	include_once "/Webshop/class/categorie.inc.php";
                    	
                    	$catarray = array();
                    	$catarray = getCategories();
                    	foreach ($catarray as $c){
                    		echo '<li><a href="/Webshop/pages/shop.php?category=' . $c->id . '">' . $c->name . '</a></li>';
                    		
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