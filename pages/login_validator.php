<?php
// Sessie starten
session_start();

include_once '../class/databaseconnect.php';

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
            echo $conn->error;
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
        }
        else
        {
            header('Refresh: 3; url=login.php');
            echo 'Deze combinatie van gebruikersnaam en wachtwoord is niet juist!';
            echo "<br>".$sGebruiker;
            echo "<br>".$sWachtwoord;
            echo "<br>".$checkWachtwoord;
        }
    }
    else
    {
        header('Refresh: 3; url=login.php');
        echo 'Een vereist veld bestaat niet!';
    }
}
else
{
    header('Location: login.php');
    exit();
}
?>