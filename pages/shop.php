<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
                <h1>Shop</h1>
               <?php include_once '../class/product.inc.php';
				foreach ($products as $p){
					
					echo $p->name;
					echo $p->category;
					echo $p->img;
					echo $p->desc;
					echo $p->price;
					echo '<br><br>';
					
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