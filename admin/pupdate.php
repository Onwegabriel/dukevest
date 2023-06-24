<?php
require_once("../dbconfig.php");

if (isset($_POST['update'])) {
    # code...
    $userid = intval($_GET['id']);
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $status=$_POST['status'];
    $address=$_POST['address'];
    
       $sql ="UPDATE products SET product_name=:fn,product_type=:ln,product_region=:pho,product_return_rate=:eml,product_min_investment=:adres,product_status=:ps WHERE product_id='$userid'";

       $query=$dbh->prepare($sql);

       $query->bindparam('fn',$fname,PDO::PARAM_STR);
       $query->bindparam('ln',$lname,PDO::PARAM_STR);
       $query->bindparam('pho',$phone,PDO::PARAM_STR);
       $query->bindparam('eml',$email,PDO::PARAM_STR);
       $query->bindparam('adres',$address,PDO::PARAM_STR);
       $query->bindparam('ps',$status,PDO::PARAM_STR);
    

       $query->execute();
       echo"<script>alert('Record updated successfully');</script>";
       echo"<script>window.location.href='admin.php'</script>";
}

?>

<html>
    <head>
        <title>i am coming</title>
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
            <li><a href="./admin.php">DASHBOARD</a></li>
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
             $sql="SELECT * FROM products WHERE product_id='$userid'";
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
                        <b>product_name</b>
                        <input type="text" name="firstname" class="form-control" value="<?php echo htmlentities($result->product_name);?>" required>
                    </div>
                    
                    <div class="col-md-4">
                        <b>product_type</b>
                        <input type="text" name="lastname" class="form-control" value="<?php echo htmlentities($result->product_type);?>" required>
                    </div>
                    <div class="col-md-4">
                        <b>product_region</b>
                        <input type="text" name="phone" class="form-control" value="<?php echo htmlentities($result->product_region);?>" required>
                    </div>
                    <div class="col-md-4">
                        <b>product_return_rate</b>
                        <input type="number" name="email"  class="form-control" value="<?php echo htmlentities($result->product_return_rate);?>" required>
                    </div>
                        <div class="col-md-4">
                             <b>product_min_investment</b>
                             <input type="text" name="address" class="form-control" value="<?php echo htmlentities($result->product_min_investment);?>" required>
                        </div>
                        <div class="col-md-4">
                        <b for="industry">Status</b>
                <select  name="status" required>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
                </div>

                </div>
                <?php
             }}
                   ?>
                <div class="row" style="margin-top:1%;">
                        <div class="col-md-8">
                            <button type="submit" name="update" class="btn btn-success " value="update">Update</button>
                            <a href="admin.php" class="btn btn-danger">Back</a>
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