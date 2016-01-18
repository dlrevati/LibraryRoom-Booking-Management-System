<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Go to Study Room</title>
        <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="login-card">
            <h1>Register</h1><br>
            <form action="registration.php" method="post">
                <input type="text" name="fname" placeholder="Firstname">
                <input type="text" name="lname" placeholder="Lastname">
                <input type="email" name="email" placeholder="Email Id">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login login-submit" value="Register">
            </form>

            <div class="login-help">
                <input type ="button" name="cancel" class="login login-submit" value="Cancel" onclick="history.go(-1);"/>
            </div>
        </div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    </body>
</html>