<?php
require_once("../dbconfig.php");

if (isset($_POST['insert'])) {
    
    $pname=$_POST['productname'];
    $ptype=$_POST['producttype'];
    $region=$_POST['region'];
    $p_return_r=$_POST['prr'];
    $min_investment=$_POST['min_investment'];
  

    $sql = "INSERT INTO products(product_name, product_type, product_region, product_return_rate, product_min_investment) VALUES(:pn,:pt,:pr,:prt,:pmn)";
    $query = $dbh->prepare($sql);

    $query->bindparam('pn',$pname,PDO::PARAM_STR);
    $query->bindparam('pt',$ptype,PDO::PARAM_STR);
    $query->bindparam('pr',$region,PDO::PARAM_STR);
    $query->bindparam('prt',$p_return_r,PDO::PARAM_STR);
    $query->bindparam('pmn',$min_investment,PDO::PARAM_STR);
   

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {
        echo"<script>alert('Record inserted successfully');</script>";
        echo"<script>window.location.href='admin.php'</script>";
    }else {
        echo"<script>alert('Something wrong with the insertion of data');</script>";
        echo"<script>window.location.href='admin.php?product'</script>";
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
                    <h1>PRODUCT CREATION....</h1>
                </div>
            </div>
            <form  name="insertrecord" method="POST"action="">
                <div class="row">
                    <div class="col-md-4">
                        <b>product name</b>
                        <input type="text" name="productname" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>product  type</b>
                        <input type="text" name="producttype" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>Region</b>
                        <input type="text" name="region" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <b>Product Return Rate</b>
                        <input type="number" name="prr" class="form-control" required>
                    </div>
                        <div class="col-md-4">
                             <b>Min Investment</b>
                             <input type="text" name="min_investment" class="form-control" required>
                        </div>
                    
                </div>
                <div class="row">
                        <div class="col-md-8">
                            <button type="submit" name="insert" class="btn btn-success " value="Create">Create</button>
                            <!-- <a href="admin.php" class="btn btn-danger">Back</a> -->
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