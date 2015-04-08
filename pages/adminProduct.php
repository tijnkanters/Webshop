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
        <h2>Beheerpagina Producten</h2><br>

        <form action="../class/insertProduct.php" method="post">
        <table class="table">
            <tr>
                <td>Naam</td><td><input type="text" name="prodname"/></td>
            </tr>
            <tr>
                <td>Beschrijving</td><td><input type="text" name="proddesc"/></td>
            </tr>
            <tr>
                <td>Image</td><td><input type="text" name="prodimg"/></td>
            </tr>
            <tr>
                <td>Prijs</td><td><input type="text" name="prodprice"/></td>
            </tr>
            <tr>
                <td>Categorie</td><td><input type="text" name="prodcat"/></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" name="add" value="add"/></td>
            </tr>
        </table>
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