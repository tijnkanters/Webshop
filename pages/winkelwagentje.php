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
                }
            ?>
            <p>
                <?php
                $cart = array();
                $cart = $_SESSION['cart'];
                
                foreach ($cart as $c){
                echo '<div style="border:2px solid lightgray">';
                
                echo '<img src="/Webshop/img/' . $c->img . '" style="width: 100px; height: 100px; border:3px solid gray;">';
                echo '<br>';
                echo $c->name;
                echo $c->price;
                echo '</div><br>';
                }
                session_write_close();
                 ?>
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