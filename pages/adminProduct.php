<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
        <?php
        session_start();
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
        session_write_close();
        ?>
        Beheerpagina Producten
        
        <form action="../class/insertProduct.php" method="post">
		Naam:<input type="text" name="prodname"/><br>
		Beschrijving:<input type="text" name="proddesc"/><br>
		Image:<input type="text" name="prodimg"/><br>
		Prijs:<input type="text" name="prodprice"/><br>
		Categorie:<input type="text" name="prodcat"/><br>
		<input type="submit" name="add" value="add"/>
</form>
    </div>
</div>


<?php include_once 'footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>