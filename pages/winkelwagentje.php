<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>
<?php include_once '../class/product.inc.php'; ?>

<div class="block">
    <div class="container">
        <?php
        session_start();
        if(!isset($_SESSION['gebruiker'])){
            header('Refresh: 3; url=/Webshop/index.php');
            echo 'Je bent nog niet ingelogd';
            exit();
        }
        ?>
        <div class="row">
            <h2>Winkelwagentje</h2>

            <?php
                if(count($_SESSION['cart']) == 0){
                    echo "<p>Er zit nog niks in je winkelwagentje.</p>";
                    exit();
                }
            ?>
            <p>
            <form action="winkelwagentje.php" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Afbeelding</th>
                            <th>Naam</th>
                            <th>Prijs</th>
                            <th>Acties</th>
                        </tr>
                    </thead>

                <?php
                $cart = array();
                $cart = $_SESSION['cart'];
                $totalprice = 0;
                $productcounter = 0;

                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if(isset($_POST['product'])) {
                        unset($cart[$_POST['product']]);
                    }
                    $filteredCart = array_values( array_filter($cart) );
                    $cart = $filteredCart;
                    $_SESSION['cart'] = $cart;
                }

                foreach ($cart as $c){
                    $totalprice = $totalprice + $c->price;
                
                echo '<tr><td><img src="/Webshop/img/' . $c->img . '" style="float: left; width: 100px; height: 100px; border:3px solid gray;"></td>';
                echo "<td>".$c->name."</td>";
                    echo "<td>€ ".$c->price."</td>";
                    echo "<td><button class='btn btn-default' type='submit' name='product' value=".$productcounter.">Verwijderen</button></td>";

                    $productcounter++;
                }
                session_write_close();

                 ?>
                <tr>
                    <td></td><td style="text-align: right; font-weight: bold;">Totaalprijs:</td><td style="font-weight: bold;">€ <?php echo number_format((float)$totalprice, 2, '.', ''); ?></td><td><button class='btn btn-primary'>Afrekenen</button></td>
                </tr>
                </table>
                </form>
            </p>
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