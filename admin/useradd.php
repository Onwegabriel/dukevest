<?php
require_once("../dbconfig.php");

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
      echo"<script>alert('User Created Successfully');</script>";
      echo"<script>window.location.href='admin.php'</script>";
  }else {
      echo"<script>alert('Something wrong with the insertion of data');</script>";
      echo"<script>window.location.href='useradd.php'</script>";
  }
}

?>







<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="../style.css" rel="stylesheet" />
    <link href="../bootstrap4/css/bootstrap.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="indexj.js"></script>
  </head>
    <body>
    <section class="user-header">
      <!--- adds the navigation bar --->
      <nav id="home" class="same-line">
        <div class="nav-left">
          <ul>
            <li><a href="./admin.php">HOME</a></li>
            <li><a href="./index.php #ourplans">PLANS</a></li>
            <li><a href="./index.php #aboutus">ABOUT US</a></li>
          </ul>
        </div>
        <div class="nav-right">
          <ul>
            <li><a href="">SEARCH</a></li>
            <li><a href="./logout.php">LOGOUT</a></li>
          </ul>
        </div>
      </nav>
     
    </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>USER CREATION....</h1>
                </div>
            </div>
            <form  name="insertrecord" method="POST"action="">
                <div class="row">
                    <div class="col-md-4">
                        <b>first_name</b>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>Last_Name</b>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>Phone</b>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>Email</b>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                        <div class="col-md-4">
                             <b>Resident Address</b>
                             <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                             <b>Password</b>
                             <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                             <b>Comfirm Password</b>
                             <input type="password" name="cpassword" class="form-control" required>
                        </div>
                    
                </div>
                <div class="row">
                        <div class="col-md-8">
                            <button type="submit" name="insert" class="btn btn-success " value="Create">Create</button>
                            <a href="admin.php" class="btn btn-danger">Back</a>
                        </div>
                    </div>
            </form>
        </div>

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