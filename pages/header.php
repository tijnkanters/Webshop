

<!--[if lt IE 8]>
<p class="browserupgrade">U gebruikt een <strong>verouderde</strong> browser. Update <a href="http://browsehappy.com/">uw browser</a>, zodat wij een betere ervaring kunnen leveren.</p>
<![endif]-->
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/Webshop/index.php"><img src="/Webshop/img/LogoWebshop.png" height="50px" width="50px"></a>
                </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/Webshop/index.php">Home</a></li>

                 <li><a href="/Webshop/pages/category.php">Shop</a></li>

                <li><a href="/Webshop/pages/about.php">About</a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
                <?php
                session_start();

                if($_SESSION['logged_in'] = true && isset($_SESSION['gebruiker']))
                {
                    echo "<li><a href='/Webshop/pages/winkelwagentje.php'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a></li>";
                    echo "<p class='navbar-text'>Welkom ". $_SESSION['gebruiker']."</p>";
                    if($_SESSION['gebruiker'] == 'admin'){
                        ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Beheer <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/Webshop/pages/adminCategorie.php">Categoriën</a></li>
                                    <li><a href="/Webshop/pages/adminProduct.php">Producten</a></li>
                                </ul>
                            </li>
                        <?php
                    }
                    echo "<li><a href='/Webshop/pages/uitloggen.php'>Uitloggen</a></li>";
                }
                else
                {
                    echo "<li><a href='/Webshop/pages/register.php'>Registreren</a></li><li><a href='/Webshop/pages/login.php'>Inloggen</a></li>";
                }
                ?>
            </ul>
            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>