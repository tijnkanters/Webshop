<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
                <h1>Inloggen</h1>
            </div>
        </div>
                <form class="form-horizontal" action="login_validator.php" method="post">
            <div class="form-group">
                <label for="username" class="col-md-2 control-label">Gebruikersnaam</label>
                <div class="col-md-4">
                    <input name="user" type="text" class="form-control" id="user">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-2 control-label">Wachtwoord</label>
                <div class="col-md-4">
                    <input name="pass" type="password" class="form-control" id="pass">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                    <button name="login" type="submit" class="btn btn-info pull-right ">Login</button>
                </div>
            </div>
            
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