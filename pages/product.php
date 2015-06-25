<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<?php include_once '../class/product.inc.php'; 
$product = getProduct($_GET['id']);

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_SESSION['gebruiker'])){
        echo "<div class='noAccess'>Je bent nog niet ingelogd</div>";
    }
    else{
        array_push($_SESSION['cart'], $product);
        echo "<div class='productAdded'>".$product->name." toegevoegd aan de winkelwagen!</div>";
    }
}
session_write_close();
?>

<div class="block">
    <div class="container">

    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
                <h1><?php echo $product->name?></h1>
                <h3><?php echo $product->category?>model</h3>
                <img src="/Webshop/img/<?php echo $product->img?>" width="300px" height="300px">
                <p>
                <?php echo $product->desc?>
                </p>
                <h2>&euro;<?php echo $product->price?>
                    <form action="product.php?id=<?php echo $product->id?>" method="post">
                        <input name="productid" type="hidden" value="<?php echo $product->id?>" />
                        <button name="order" type="submit" class="btn btn-info pull-right ">In winkelwagen</button>
                    </form>

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