<?php 
require_once("dbconfig.php");

if (isset($_POST['insert'])) {
    
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql = "INSERT INTO users(first_name, last_name, phone, email, address, password) VALUES(:fn,:ln,:pho,:eml,:adres,:pwd)";
    $query = $dbh->prepare($sql);

    $query->bindparam('fn',$fname,PDO::PARAM_STR);
    $query->bindparam('ln',$lname,PDO::PARAM_STR);
    $query->bindparam('pho',$phone,PDO::PARAM_STR);
    $query->bindparam('eml',$email,PDO::PARAM_STR);
    $query->bindparam('adres',$address,PDO::PARAM_STR);
    $query->bindparam('pwd',$password,PDO::PARAM_STR);

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {
        echo"<script>alert('Record inserted successfully');</script>";
        echo"<script>window.location.href='client.php'</script>";
    }else {
        echo"<script>alert('Something wrong with the insertion of data');</script>";
        echo"<script>window.location.href='signup.php'</script>";
    }
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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h2>Sign up</h2>
            </div>
        </section>
        <section>
            <div class="signup-container">
                <form action="" method="post">
                    <h3>register now</h3>
                    <input type="text" name="firstname" required placeholder="Enter your First Name">
                    <input type="text" name="lastname" required placeholder="Enter your Last Name">
                    <input type="number" name="phone" required placeholder="Enter your Phone Number">
                    <input type="email" name="email" required placeholder="Enter your Email Address">
                    <select name="address" required>
                        <option value="country">Select Country</option>
                        <option value="australia">Australia</option>
                        <option value="usa">USA</option>
                        <option value="uk">UK</option>
                        <option value="canada">Canada</option>
                        <option value="india">India</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="nepal">Nepal</option>
                    </select>
                    <input type="password" name="password" required placeholder="Enter your password">
                    <input type="password" name="cpassword" required placeholder="Confirm your password">
                    <input type="submit" name="insert" value="sign up now" class="form-btn">
                    <p>Already have an account? <a href="./signin.php">Login now</a></p>
                </form>
            </div>   
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
    </body>
</html>