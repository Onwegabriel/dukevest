<?php
require_once("../dbconfig.php");

if (isset($_POST['update'])) {
    # code...
    $userid = intval($_GET['id']);
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];

       $sql ="UPDATE r_manager SET username=:fn,password=:ln,rm_name=:pho WHERE id='$userid'";

       $query=$dbh->prepare($sql);

       $query->bindparam('fn',$fname,PDO::PARAM_STR);
       $query->bindparam('ln',$lname,PDO::PARAM_STR);
       $query->bindparam('pho',$phone,PDO::PARAM_STR);
      

       $query->execute();
       echo"<script>alert('Record updated successfully');</script>";
       echo"<script>window.location.href='rm.php'</script>";
}

?>

<html>
<head>
        <title>DUKEVEST</title>
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <section class="user-header">
      <!--- adds the navigation bar --->
      <nav id="home" class="same-line">
        <div class="nav-left">
          <ul>
            <li><a href="./rm.php">DASHBOARD</a></li>
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
                    <h1>PHP CRUD OPERATIONS USING PDOEXTENSION</h1>
                </div>
            </div>

            <?php
             $userid=intval($_GET['id']);
             $sql="SELECT * FROM r_manager WHERE id='$userid'";
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
                        <b>Username</b>
                        <input type="text" name="firstname" class="form-control" value="<?php echo htmlentities($result->username);?>" required>
                    </div>
                    
                    <div class="col-md-4">
                        <b>Password</b>
                        <input type="password" name="lastname" class="form-control" value="<?php echo htmlentities($result->password);?>" required>
                    </div>
                    <div class="col-md-4">
                        <b>rm_name</b>
                        <input type="text" name="phone" class="form-control" value="<?php echo htmlentities($result->rm_name);?>" required>
                    </div>
              
                <?php
             }}
                   ?>
                <div class="row" style="margin-top:1%;">
                        <div class="col-md-8">
                            <button type="submit" name="update" class="btn btn-success " value="update">Update</button>
            
                        </div>
                    </div>
            </form>
        </div>


               <!----- footer ---->
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