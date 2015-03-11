<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<?php include_once '../class/product.inc.php'; ?>

<div class="block">
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                <h1><?php echo $name?></h1>
                <h3><?php echo $catagory?>model</h3>
                <img src="<?php echo $img?>">
                <p>
                <?php echo $desc?>
                </p>
                <h2>&euro;<?php echo $price?>
                
                <button name="order" type="submit" class="btn btn-info pull-right ">In winkelwagen</button>
                </h2>
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