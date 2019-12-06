<html>
    <head>
        <meta charset="utf-8">
        <title>WebDefendo-Login</title>
        <link href="stileAdmin/login.css" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/jquery.fullscreen-master/release/jquery.fullscreen.js"></script>
    </head>
    <body style="background-image: url('img/sfondoLog.jpg');background-repeat: no-repeat;  background-size: cover;"> 

        <div id="container-login">
            <div id="etichetta">
                <h3>Ciao!</h3>
                <span>Bentornato in WD</span>
            </div>
            <form action="conn/ControlloLogin.php" method="POST">
                <span class="label-log">Username</span><br>
                <input type="text" name="username" placeholder="username" autofocus required><br>
                <span class="label-log">Password</span><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                <input type="submit" value="Accedi" class="btn-login">

            </form>
        </div>
        
    </body>
</html>