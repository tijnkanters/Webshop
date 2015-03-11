<?php
// Sessie starten
session_start();

include_once '/Webshop/class/databaseconnect.php';

// DUMMYDATA
$sGebruikerControle = 'admin';
$sWachtwoordControle = 'wachtwoord';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_POST['user'], $_POST['pass']))
    {
        $sGebruiker = trim($_POST['user']);
        $sWachtwoord = trim($_POST['pass']);

        if($sGebruiker == $sGebruikerControle && $sWachtwoord == $sWachtwoordControle)
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