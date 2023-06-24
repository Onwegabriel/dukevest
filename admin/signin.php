<?php
session_start();
try {
    require_once("dbconfig.php");
    if (isset($_POST['login'])) {
        
        if (empty($_POST['username'])  || empty($_POST['password'])) {

            $message='All fields are required';
        }else{
            $sql = "SELECT * FROM admin WHERE username =:username AND password=:password";
            $userrow = $dbh->prepare($sql);
            $userrow->execute(
                array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                )
            );
            $count = $userrow->rowCount();
            if ($count >0) {
                foreach($userrow as $result);
                $_SESSION['userid'] = $result['id'];
                header('location:admin.php');
            }else {
                $message="wrong username or password";
            }
        }
    }
} catch (\Throwable $error) {
    $message->$error->getMessage();
}
?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial scale=1.0" />
        <title>DukeVest</title>
        <link href="style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
        <link href="bootstrap4/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <script src="indexj.js"></script>
    </head>

    <body>
        <section class="sub-header"> <!--- adds the navigation bar --->
            <nav id="home" class="same-line">
                <div class="nav-left">
                    <ul>
                        <li><a href="./index.php">HOME</a></li>
                        <li><a href="./index.php #ourplans">PLANS</a></li>
                        <li><a href="./index.php #aboutus">ABOUT US</a></li>
                    </ul>
                </div>
                <div class="nav-right">
                    <ul>
                        <li><a href="">SEARCH</a></li>
                        <li><a href="./signin.php">SIGN IN</a></li>
                        <li><a href="./contact.php">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
            <div class="second-text-box">
                <h1>DUKEVEST</h1>
                <h2>Sign in</h2>
            </div>
        </section>
        <section class="users-page">
            <h2>Choose Account Type</h2>
            <div class="form signin">
                <div class="users-header">
                    <div class="show-client">Client</div>
                    <div class="show-admin">Admin</div>
                    <div class="show-rm">RM</div>
                </div>
                <div class="arrow"></div>
                <form  method="post">
                <div class="form-elements">
                    <div class="form-element">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-element">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-element">
                        <button type="submit" name="login">Login</button>
                    </div>
                    </form>
                    <p>Don't have an account? <a href="./signup.php">Sign up now</a></p>
                </div>
                <?php
        if (isset($message)) {
            echo'<div class="alert alert-danger">'.$message.'</div>';
        }
        ?>
        </section>
        <!----- footer ---->
        <section class="footer">
            <h4>Dukevest</h4>
            <p>Explore the best investment portals and glide your way into financial freedom</p>
            <div class="icons"> <!---- adds the contact icons ---->
                <i class="fa fa-twitter"></i>
                <i class="fa fa-whatsapp"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
        </section>
        <script>
            $(document).ready(function () {
                $(".form.signin .show-client").click(function () {
                    $(".arrow").css({ left: 60 });
                    $(this).css("color", "#0568a6")
                    $(".signin .show-rm").css("color", "black");
                    $(".signin .show-admin").css("color", "black");
                })
                $(".signin .show-admin").click(function () {
                    $(this).css("color", "#0568a6");
                    $(".form.signin .show-client").css("color", "black")
                    $(".signin .show-rm").css("color", "black")
                    $(".arrow").css({ left: 190 });
                })
                $(".signin .show-rm").click(function () {
                    $(".form.signin .show-client").css("color", "black")
                    $(".form.signin .show-admin").css("color", "black")
                    $(this).css("color", "#0568a6")
                    $(".arrow").css({ left: 325 });
                })
            })
        </script>
    </body>

</html>