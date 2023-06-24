<?php
 require_once("session.php");
 require_once("../dbconfig.php");

 if (isset($_REQUEST['del'])) {
  $uid = intval($_GET['del']);
  $sql = "DELETE FROM plan WHERE id='$uid'";
  $query=$dbh->prepare($sql);

  $query->bindparam(':id',$uid,PDO::PARAM_STR);
  $query->execute();
  
  echo"<script>alert('Record Deleted successfully');</script>";
  echo"<script>window.location.href='rm.php'</script>";
};
if (isset($_POST['upd'])) {
  $uid = intval($_GET['upd']);
  $status=$_POST['status'];
  // $commend=$_POST['commend'];
  $sql = "UPDATE  plan SET status=:sts WHERE id='$uid'";
  $query=$dbh->prepare($sql);

  $query->bindparam('sts',$status,PDO::PARAM_STR);
  // $query->bindparam('rec',$commend,PDO::PARAM_STR);

  $query->execute();
  echo"<script>alert('Record Updated successfully');</script>";
  echo"<script>window.location.href='rm.php'</script>";
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="../style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
            <li>
            <a href="update.php?id=<?php echo htmlentities($userresult->id);?>" clas="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o btn btn-primary btn-sm">Edit Profile</span></a><br>
            </li>
            <li><a href="./logout.php">LOGOUT</a></li>
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
            <h3><?php echo htmlentities($userresult->rm_name);?></h3>
          </div>
          <div class="rm-items">
            <li><a href="">CLIENTS</a></li>
          </div>
        </div>
        <div class="user-col2">
          <div class="board">
            <table width="100%">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Product</td>
                  <td>Duration</td>
                  <td>Payment</td>
                  <td>Industry</td>
                  <td>Status</td>
                  <td>Recommend</td>
                  <td>.....Tools.....</td>
                </tr>
              </thead>
              <tbody>
              <?php
                                  $sql = "SELECT * FROM plan";
                                  $query = $dbh->prepare($sql);
                                  $query->execute();
                                  $result=$query->fetchAll(PDO::FETCH_OBJ);

                                //   $cnt=1;
                                  if ($query->rowCount() > 0) {
                                    foreach($result as $result)
                                  {
                                ?>   
                                <form  method="post">     
                <tr>
                  <td class="people">
                    <img src="<?php echo htmlentities(!empty($result->photo))? '  '.htmlentities($result->photo): '../upload/avatarm7-min.jpg';?>" class="img-circle" style=" background-size:contain; boarder:50px; width: 100px; height: 100px;" />
                    <div class="people-de">
                      <h5><?php echo htmlentities($result->full_name);?></h5>
                      <p><?php echo htmlentities($result->email);?></p>
                      <p><?php echo htmlentities($result->region);?></p>
                    </div>
                  </td>
                  <td class="people-pr">
                    <h5>Product</h5>
                  </td>
                  <td class="active"><p>In months</p></td>
                  <td class="amount"><p><?php echo htmlentities($result->income);?></p></td>
                  <td class="industry"><p><?php echo htmlentities($result->industry);?></p></td>
                  
                  <td class="Status">
                    <select name="status" >
                      <option><?php echo htmlentities($result->status);?></option>
                      <option value="pending">Pending</option>
                      <option value="approved">Approved</option>
                      <option value="disapproved">Disapproved</option>
                    </select>
                  </td>
                  
                  <td>
                    <input type="text" name="commend" class="recommend" />
                  </td>
                  <td class="industry">
                  <a href="rm.php?upd=<?php echo htmlentities($result->id);?>" name="upd" type="submit" class="btn btn-primary btn-sm"><span class="fa fa-pencil btn btn-primary btn-sm"></span></a>
                   <a href="rm.php?del=<?php echo htmlentities($result->id);?>" class="btn btn-danger btn-sm" onClick="return confirm('Do you really want to delete')"><span class="fa fa-trash btn btn-danger btn-sm"></span></a> 
                  </td>
                </tr>
                </form>
                <?php 
                   }}
                   ?> 

                
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
  </body>
</html>
