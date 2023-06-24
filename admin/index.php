<?php
session_start();
try {
    require_once("../dbconfig.php");
    if (isset($_POST['login'])) {
        
        if (empty($_POST['username'])  || empty($_POST['password'])) {

            $message='All field are required';
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






<html>
<head>
        <title>login</title>
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link href="bootstrap4/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="">
    </head>
    <body style="background:#eee;">

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
                    </ul>
                </div>
            </nav>
            <div class="second-text-box">
                <h1>DUKEVEST</h1>
            </div>
        </section>
        <div class="container" style="width:30%;">
        <br>
        <h3>Admin Login</h3>
        <form  method="post">
            <div class="form-group">
                <label >Username</label>
                <input type="text" name="username" class="form-control" placeholder="username"required>
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" class="form-control" placeholder="password"required>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
        </form>
        <?php
        if (isset($message)) {
            echo'<div class="alert alert-danger">'.$message.'</div>';
        }
        ?>
        </div>
    </body>
</html>