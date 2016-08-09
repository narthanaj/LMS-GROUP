<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, metro, front-end, frontend, web development">
    <meta name="author" content="Sergey Pimenov and Metro UI CSS contributors">

    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico' />

    <title>NSBM University Login</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>

    <style>
        .login-form {
            width: 25rem;
            height: 20.75rem;
            position: fixed;
            top: 44%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
    </style>

    <script>


        if (window.location.hostname !== 'localhost') {

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-82078132-1', 'auto');
            ga('send', 'pageview');

        }


        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>

</head>


<body >
    <div class="login-form padding20 block-shadow">
        <form method="post" action="index.php?action=login">
            <img src="images/logo/logo.png" >
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Username:</label>
                <input type="text" name="urname" id="user_login" placeholder="Username">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Password:</label>
                <input type="password" name="psswrd" id="user_password" placeholder="Password">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <?php
            error_reporting(E_ALL & ~E_NOTICE); #Report all errors except E_NOTICE
            session_start();
            if(isset($_POST[login])){
                require 'connect.php'; #database connection details
                $username = $_POST['urname']; #assign username to php variable
                $password = $_POST['psswrd']; #assign password to php variable
                $result = mysqli_query($con,'SELECT * FROM logins WHERE username="'.$username.'" AND password="'.$password.'"') ; #SQL
              if(mysqli_num_rows($result)==1){
                $_SESSION['urname'] = $username;
                header('location: home.php');
              }
              else {
                echo "<b>Incorrect Username & Password</b>";
              }
              }
              if (isset($_GET['logout'])) {
                session_unregister('urname');#logout part
              }
             ?>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary" name="login">Login</button>
                <button type="button" class="button link" name="cancel">Cancel</button>

        </form>
    </div>

</body>
</html>
