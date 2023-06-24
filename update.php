<?php
require_once("dbconfig.php");

if (isset($_POST['update'])) {
    # code...
    $userid = intval($_GET['id']);
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $pass=$_POST['password'];
       $sql ="UPDATE users SET first_name=:fn,last_name=:ln,phone=:pho,email=:eml,address=:adres,password=:pwd WHERE id='$userid'";

       $query=$dbh->prepare($sql);

       $query->bindparam('fn',$fname,PDO::PARAM_STR);
       $query->bindparam('ln',$lname,PDO::PARAM_STR);
       $query->bindparam('pho',$phone,PDO::PARAM_STR);
       $query->bindparam('eml',$email,PDO::PARAM_STR);
       $query->bindparam('adres',$address,PDO::PARAM_STR);
       $query->bindparam('pwd',$pass,PDO::PARAM_STR);

       $query->execute();
       echo"<script>alert('Record updated successfully');</script>";
       echo"<script>window.location.href='client.php'</script>";
}

?>

<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
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
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./index.php #ourplans">PLANS</a></li>
            <li><a href="./index.php #aboutus">ABOUT US</a></li>
          </ul>
        </div>
        <div class="nav-right">
          <ul>
            <li><a href="">SEARCH</a></li>
            <li><a href="./logout.php">LOG OUT</a></li>
            <li><a href="./client.php">DASHBOARD</a></li>
          </ul>
        </div>
      </nav>
    </section>
    
        <div class="container">
           

            <?php
             $userid=intval($_GET['id']);
             $sql="SELECT * FROM users WHERE id='$userid'";
             $query = $dbh->prepare($sql);

             $query->bindparam('uid',$userid,PDO::PARAM_STR);
             $query->execute();
             $result=$query->fetchAll(PDO::FETCH_OBJ);

             $cnt=1;
             if ($query->rowCount() >0){
                foreach ($result as $result); 
             {
            ?>
            <form  name="insertrecord" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <b>first name</b>
                        <input type="text" name="firstname" class="form-control" value="<?php echo htmlentities($result->first_name);?>" required>
                    </div>
                    
                    <div class="col-md-4">
                        <b>last  name</b>
                        <input type="text" name="lastname" class="form-control" value="<?php echo htmlentities($result->last_name);?>" required>
                    </div>
                    <div class="col-md-4">
                        <b>phone</b>
                        <input type="number" name="phone" class="form-control" value="<?php echo htmlentities($result->phone);?>" required>
                    </div>
                    <div class="col-md-4">
                        <b>email</b>
                        <input type="text" name="email" class="form-control" value="<?php echo htmlentities($result->email);?>" required>
                    </div>
                        <div class="col-md-4">
                             <b>address</b>
                             <input type="text" name="address" class="form-control" value="<?php echo htmlentities($result->address);?>" required>
                        </div>
                    <div class="col-md-4">
                        <b>password</b>
                        <input type="password" name="password" class="form-control" required value="<?php echo htmlentities($result->password);?>">
                    </div>
                </div>
                <?php
             }}
                   ?>
                <div class="row" style="margin-top:1%;">
                        <div class="col-md-8">
                            <button type="submit" name="update" class="btn btn-success " value="update">Update</button>
                            <a href="client.php" class="btn btn-danger">Back</a>
                        </div>
                    </div>
            </form>
        </div>
        <section class="footer">
      <h4>Dukevest</h4>
      <p>
        Explore the best investment portals and glide your way into financial
        freedom
      </p>
      <div class="icons">
        <!---- adds the contact icons ---->
        <i class="fa fa-twitter"></i>
        <i class="fa fa-whatsapp"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </div>
    </section>
    </body>
</html>