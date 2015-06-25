<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>
<div class="block">
    <div class="container">
<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);

include '../class/databaseconnect.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['user'], $_POST['pass']))
    {
        $sGebruiker = trim($_POST['user']);
        $sWachtwoord = trim($_POST['pass']);

        $sql = "SELECT g.Wachtwoord FROM trkanter_db.gebruikers AS g WHERE g.Gebruikersnaam = '$sGebruiker'";
        $result = $conn->query($sql);

        if ($result != null && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $checkWachtwoord = $row["Wachtwoord"];
            }
        }
        else{
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist! (GEBRUIKER NIET GEVONDEN)';
            //echo $conn->error;
            echo $sql;
            exit();
        }

        $conn->close();

        if($sWachtwoord == $checkWachtwoord)
        {
            $_SESSION['logged_in'] = true;
            $_SESSION['gebruiker'] = $sGebruiker;

            header('Refresh: 3; url=/Webshop/index.php');
            echo 'Je bent succesvol ingelogd. Je wordt doorgestuurd.';
            echo 'Gebeurt er niets, klik dan <a href="/Webshop/index.php">hier</a>.';
            exit();
        }
        else
        {
            header('Refresh: 3; url=login.php');
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';
            echo '<a href="login.php"> - Terug naar login -</a>';
            exit();
        }
    }
    else
    {
        header('Refresh: 3; url=login.php');
        echo 'Een vereist veld bestaat niet!';
        exit();
    }
}
else
{
    header('Location: login.php');
    exit();
}
session_write_close();
?>
    </div>
    </div>

<?php include_once 'footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
    </body>
</html>