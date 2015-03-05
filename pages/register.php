<?php include_once 'head.php'; ?>
<body>
<?php include_once 'header.php'; ?>

<div class="block">
    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-2">
                <h1>Register</h1>
            </div>
        </div>
        <form class="form-horizontal" action="contactform.php" method="post">
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Gebruikersnaam</label>
                <div class="col-md-4">
                    <input name="username" type="email" class="form-control" id="username">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-md-2 control-label">E-mail</label>
                <div class="col-md-4">
                    <input name="email" type="email" class="form-control" id="email">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-md-2 control-label">Wachtwoord</label>
                <div class="col-md-4">
                    <input name="pw" type="password" class="form-control" id="pw">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-md-2 control-label">Herhaal wachtwoord</label>
                <div class="col-md-4">
                    <input name="pw2" type="password" class="form-control" id="pw2">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4 col-md-offset-2">
                    <button name="register" type="submit" class="btn btn-info pull-right ">Registreer</button>
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