<?php
 require_once("session.php");
 require_once("../dbconfig.php");

 if (isset($_REQUEST['del'])) {
  $uid = intval($_GET['del']);
  $sql = "DELETE FROM products WHERE product_id='$uid'";
  $query=$dbh->prepare($sql);

  $query->bindparam(':id',$uid,PDO::PARAM_STR);
  $query->execute();
  
  echo"<script>alert('Record Deleted successfully');</script>";
  echo"<script>window.location.href='admin.php'</script>";
};

if (isset($_REQUEST['del2'])) {
  $uid = intval($_GET['del2']);
  $sql = "DELETE FROM users WHERE id='$uid'";
  $query=$dbh->prepare($sql);

  $query->bindparam(':id',$uid,PDO::PARAM_STR);
  $query->execute();
  
  echo"<script>alert('Record Deleted successfully');</script>";
  echo"<script>window.location.href='admin.php'</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="../style.css" rel="stylesheet" />
    <link href="../bootstrap4/css/bootstrap.css" rel="stylesheet" />
        <link href="../bootstrap4/css/dataTables.bootstrap.min.css" rel="stylesheet">
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
            <li><a href="./admin.php">HOME</a></li>
          </ul>
        </div>
        <div class="nav-right">
          <ul>
            <li>
            <a href="adminupdate.php?id=<?php echo htmlentities($userresult->id);?>" clas="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o btn btn-primary btn-sm">Edit Profile</span></a><br>
            </li>
            <li><a href="">SEARCH</a></li>
            <li><a href="./logout.php">LOG OUT</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
          </ul>
        </div>
      </nav>
     
    </section>
    <section id="menu">
      <div class="user-row">
        <div class="user-col">
          <div class="logo">
            <h2>DukeVest</h2>
          </div>
          <div class="img-area" style=" background-size:contain; boarder:50px; width: 150px; height: 150px;">
          <img src="../upload/championsleague___BryMy6EAZW2___.jpg" style=" background-size:contain; boarder:50px; width: 150px; height: 150px;">
          </div>
          <i class="fa fa-circle" style="color: rgb(52, 204, 52); margin-left:50%;"></i>
          <div class="rmname">
            <h3><?php echo htmlentities($userresult->admin_name);?></h3>
          </div>
          <div class="admin-items">
            <li id="client"><a href="">CLIENT</a></li>
            <li id="product"><a href="">PRODUCT</a></li>
            <li id="payment"><a href="">PAYMENT</a></li>
          </div>
        </div>
        <div class="user-col2">
       
          <div class="board client"> 
          <div class="table-responsive">
                        <table id="my table" class="table table-striped table-bordered table-responsive">
                        <a href="useradd.php" class="btn btn-success">Create New User</a>
                            <thead>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Registration Date</th>
                                <th>.........Tools.........</th>
                            </thead>
                            <tbody>
                                <?php
                                  $sql = "SELECT * FROM users";
                                  $query = $dbh->prepare($sql);
                                  $query->execute();
                                  $result=$query->fetchAll(PDO::FETCH_OBJ);

                                  $cnt=1;
                                  if ($query->rowCount() > 0) {
                                    foreach($result as $result)
                                  {
                                ?>                             
                                    <tr>
                                        <td><?php echo $cnt;?></td>
                                        <td><img src=" <?php echo htmlentities(!empty($result->photo))? '  '.htmlentities($result->photo): '../upload/avatarm7-min.jpg';?>" class="img-circle" style=" background-size:contain; boarder:50px; width: 60px; height: 60px;"></td>
                                        <td><?php echo htmlentities($result->first_name);?></td>
                                        <td><?php echo htmlentities($result->last_name);?></td>
                                        <td><?php echo htmlentities($result->phone);?></td>
                                        <td><?php echo htmlentities($result->email);?></td>
                                        <td><?php echo htmlentities($result->address);?></td>
                                        <td><?php echo htmlentities($result->created_at);?></td>
                                        <td>
                                            <a href="profile.php?id=<?php echo htmlentities($result->id);?>" clas="btn btn-primary btn-sm" ><span class="fa fa-photo btn btn-success btn-sm" ></span></a>
                                            <a href="update.php?id=<?php echo htmlentities($result->id);?>" clas="btn btn-primary btn-sm"><span class="fa fa-pencil btn btn-primary btn-sm"></span></a>
                                            <a href="admin.php?del2=<?php echo htmlentities($result->id);?>" clas="btn btn-danger btn-sm" onClick="return confirm('Do you really want to delete')"><span class="fa fa-trash btn btn-danger btn-sm"></span></a>
                                        </td>
                                    </tr>
                                
                                <?php 
                                    $cnt++;
                                }}?>
                            </tbody>
                        </table>
                    </div>
          </div>
          <div class="board product">
            <table width="100%" class="table table-striped table-bordered table-responsive">
              <a href="insert.php" class="btn btn-primary">Add New Product</a>
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Product_type</td>
                  <td>Product_Regon</td>
                  <td>Product_Return_rate</td>
                  <td>Min_Investment</td>
                  <td>Product_Status</td>
                  <td>Created_At</td>
                  <td>.....Tools.....</td>
                </tr>
              </thead>
              <tbody>
              <?php
                                  $sql = "SELECT * FROM products";
                                  $query = $dbh->prepare($sql);
                                  $query->execute();
                                  $result=$query->fetchAll(PDO::FETCH_OBJ);

                                  $cnt=1;
                                  if ($query->rowCount() > 0) {
                                    foreach($result as $result)
                                  {
                                ?>                             
                                    <tr>
                                        <td><?php echo htmlentities($cnt);?></td>
                                        <td><?php echo htmlentities($result->product_name);?></td>
                                        <td><?php echo htmlentities($result->product_type);?></td>
                                        <td><?php echo htmlentities($result->product_region);?></td>
                                        <td><?php echo htmlentities($result->product_return_rate);?></td>
                                        <td><?php echo htmlentities($result->product_min_investment);?></td>
                                        <td><?php echo htmlentities($result->product_status);?></td>
                                        <td><?php echo htmlentities($result->created_at);?></td>
                                        <td>
                                            <a href="pupdate.php?id=<?php echo htmlentities($result->product_id);?>" clas="btn btn-primary btn-sm"><span class="fa fa-pencil btn btn-primary btn-sm"></span></a>
                                            <a href="admin.php?del=<?php echo htmlentities($result->product_id);?>" clas="btn btn-danger btn-sm" onClick="return confirm('Do you really want to delete')"><span class="fa fa-trash btn btn-danger btn-sm"></span></a>
                                        </td>
                                    </tr>
                                
                                <?php 
                                    $cnt++;
                                }}?>
              </tbody>
            </table>
          </div>
          <div class="board payment">
            <table width="100%">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Currency</td>
                  <td>Time</td>
                  <td>Plan</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr class="admin-row">
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>USD</p>
                  </td>
                  <td>
                    <p>11:46am</p>
                  </td>
                  <td>
                    <p>Business</p>
                  </td>
                  <td>
                    <p>Pending</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>CAD</p>
                  </td>
                  <td>
                    <p>6:67pm</p>
                  </td>
                  <td>
                    <p>Investment</p>
                  </td>
                  <td>
                    <p>Approved</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>3</p>
                  </td>
                  <td>
                    <p>EUR</p>
                  </td>
                  <td>
                    <p>9:02am</p>
                  </td>
                  <td>
                    <p>Business Lending</p>
                  </td>
                  <td>
                    <p>Disapprmoved</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

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
    <script>
      $(document).ready(function () {
        $("#client").click(function () {
          $(".board.product").css("display", "none");
          $(".board.payment").hide();
          $(".board.client").show();
          $(this).css({
            "background-color": "#C0C0C0",
            "color": "#eee",
          })
          $("#payment, #product").css({
            "background-color": "#ccc",
          })
          return false;
        })
        $("#product").click(function () {
          $(".board.client").css({ "display": "none" });
          $(".board.payment").hide();
          $(".board.product").show();
          $(this).css({
            "background-color": "#C0C0C0",
            "color": "#eee",
          })
          $("#client, #payment").css({
            "background-color": "#ccc",
          })
          return false;
        })
        $("#payment").click(function () {
          $(".board.client").css("display", "none");
          $(".board.product").hide();
          $(".board.payment").show();
          $(this).css({
            "background-color": "#c0c0c0",
            "color": "#eee",
          })
          $("#client, #product").css({
            "background-color": "#ccc",
          })
          return false;
        })
      })

    </script>
    <script src="../bootstrap4/js/dataTables.bootstrap.min.js"></script>
    <script src="../bootstrap4/js/jquery.dataTables.min.js"></script>
  </body>

    </html>