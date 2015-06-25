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
        include_once "../class/categorie.inc.php";

        $catarray = array();
        $catarray = getCategories();
        ?>
        <h2>Beheerpagina Categoriën</h2>

        <form action="../class/removeCategorie.php" method="post">
            <p>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Parent</th>
                    <th>Verwijderen</th>
                </tr>
                <?php
                foreach ($catarray as $c){
                    echo "<tr>";
                    echo "<td>$c->id</td>";
                    echo "<td>$c->name</td>";
                    echo "<td>$c->parentid</td>";
                    echo "<td><button type='submit' name='id' value='$c->id' class='btn btn-default'>Verwijderen</button></td>";
                    echo "</tr>";
                }
                ?>
            </table>
            </p>
        </form>


        <h2>Categorie toevoegen</h2>
        <p>
        <form action="../class/insertCategorie.php" method="post">
            <label>Naam:</label><br>
		    <input type="text" class="form-control" name="catname"/><br>
            <label for="parent">Parent categorie:</label>
            <select class="form-control" id="parent" name="parent">
                <option value=''></option>
                <?php
                foreach ($catarray as $c){
                    var_dump($c);
                    if($c->parentid == null){
                        echo "<option value='$c->id'>$c->name</option>";
                    }
                }
                ?>
            </select><br>
            <input type="submit" name="add" class="btn btn-default" value="Toevoegen"/>
        </form>
        </p>

    </div>
</div>


<?php include_once 'footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>