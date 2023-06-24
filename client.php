<?php
 require_once("session.php");
 require_once("dbconfig.php");
//  require_once("dbconfig2.php");


 if (isset($_POST['invest'])) {
    
  $fname=$_POST['fullname'];
  $region=$_POST['region'];
  $industry=$_POST['industry'];
  $income=$_POST['income'];
  $email=$_POST['email'];
  // $photo=$_POST['photo'];


  $sql = "INSERT INTO plan(full_name, region, industry, income, email) VALUES(:fn,:rg,:ind,:inc,:eml)";
  $query = $dbh->prepare($sql);

  $query->bindparam('fn',$fname,PDO::PARAM_STR);
  $query->bindparam('rg',$region,PDO::PARAM_STR);
  $query->bindparam('ind',$industry,PDO::PARAM_STR);
  $query->bindparam('inc',$income,PDO::PARAM_STR);
  $query->bindparam('eml',$email,PDO::PARAM_STR);
  // $query->bindparam('pht',$photo,PDO::PARAM_STR);


  $query->execute();

  $lastInsertId = $dbh->lastInsertId();

  if ($lastInsertId) {
      echo"<script>alert('Record inserted successfully');</script>";
      echo"<script>window.location.href='congrats.php'</script>";
  }else {
      echo"<script>alert('Something wrong with the insertion of data');</script>";
      // echo"<script>window.location.href='client.php'</script>";
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
    <!-- <link rel="stylesheet" href="./bootstrap4/css/bootstrap.css"> -->
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
          <li>
          <a href="update.php?id=<?php echo htmlentities($userresult->id);?>" clas="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o btn btn-primary btn-sm">Edit Profile</span></a><br>
          </li>
            <li>
            <a href="profile.php?id=<?php echo htmlentities($userresult->id);?>" clas="btn btn- btn-sm"><span class="fa fa-photo btn btn-primary btn-sm">Upload Photo</span></a>
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
          <img src=" <?php echo htmlentities(!empty($userresult->photo))? '  '.htmlentities($userresult->photo): 'upload/avatarm7-min.jpg';?>" class="img-circle" style=" background-size:contain; boarder:50px; width: 150px; height: 150px;">
          </div>
          <div class="clientname">
          <i class="fa fa-circle" style="color: rgb(52, 204, 52); margin-left:1%;"></i>
            <h3>
            <?php echo htmlentities($userresult->first_name);?>
            </h3>
          </div>
          
          <div class="items">
            <li id="banking"><a href="">BANKING</a></li>
            <li id="investment"><a href="">INVESTMENT</a></li>
            <li id="wealth-mgt"><a href="">WEALTH MANAGEMENT</a></li>
            <li id="biz-lending"><a href="">BUSINESS LENDING</a></li>
          </div>
        </div>
        <div class="user-col2" id="banking-div">
          <div class="plan-headers">
            <h1>BANKING</h1>
            <p>
              Banking is a vital part of managing personal finances. For the
              everyday business man and woman, entrepreneur, banking is an
              important part of financial planning, providing the means to save,
              invest, and access necessary funds. Our banking services can help
              with budgeting and achieving financial goals, such as saving for
              retirement or a home.
            </p>
          </div>
          <div class="banking">
            <div class="row">
              <div class="plans-col">
                <div class="pba">
                  <h3>Provide Bank Account</h3>
                  <ul class="pba-menu">
                    <li><a href="">Private Banking</a></li>
                    <li><a href="">Offshore Banking</a></li>
                  </ul>
                  <input type="submit" name="submit" value="Switch Account" class="form-btn" />
                </div>
              </div>
              <div class="plans-col">
                <img src="images/user.jpeg" />
              </div>
            </div>
          </div>
        </div>
        <section class="user-col2" id="investment-section" style="display: none">
          <div class="plan-headers">
            <h1>INVESTMENT</h1>
            <p>
              Our investment services and tools are the best in the industry,
              making them the perfect choice for businesses, entrepreneurs and
              business-minded individuals. Professional and experienced, we
              provide the highest quality resources to help you make informed
              decisions about your investments. Moreover, our services and tools
              are designed to maximize your profits and minimize your risks.
            </p>
          </div>
          <div class="invest">
            <div class="invest-form">
              <form method="POST">
                
                <input type="email" name="email" hidden style="display:none;" value="<?php echo htmlentities($userresult->email);?>">
                <input type="text" name="fullname" hidden style="display:none;" value="<?php echo htmlentities($userresult->first_name);?> <?php echo htmlentities($userresult->last_name);?>">
                <label for="region">Select Your Region</label>
                <select id="region" name="region" required>
                <?php
                require 'dbconfig2.php';
                $sql = "SELECT * FROM products WHERE product_status='Active' ";
                $result=mysqli_query($dbh,$sql);
                while ($row=mysqli_fetch_array($result)) {
                    # code...
                
              
                ?>
                <option value="<?= $row['product_region'];?>"><?= $row['product_region'];?></option>
                <?php } ?>
                </select>
                <label for="industry">Select Industry</label>
                <select id="industry" name="industry" required>
                <?php
                require 'dbconfig2.php';
                $sql = "SELECT * FROM products WHERE product_status='Active' ";
                $result=mysqli_query($dbh,$sql);
                while ($row=mysqli_fetch_array($result)) {
                    # code...
                
              
                ?>
                <option value="<?= $row['product_type'];?>"><?= $row['product_type'];?></option>
                <?php } ?>
                </select>
                <label for="income">How Much Do You Earn?</label>
                <input type="number" name="income" />
                <button type="submit"  name="invest" value="Submit" class="form-btn">Submit</button>
              </form>
              <!-- <input type="submit" name="invest" value="Submit" class="form-btn" /> -->
            </div>
          </div>
        </section>

        <section class="user-col2" id="wealth-mgt-section" style="display: none">
          <div class="plan-headers">
            <h1>WEALTH MANAGEMENT</h1>
            <p>
              Wealth management and sustainability are closely linked, requiring
              professional approaches to ensure both are optimally managed. We
              consider environmental and social impacts when making investment
              decisions, while also ensuring their clients' portfolios remain
              profitable. To do this, we take into account factors such as
              climate change, energy transition and the social consequences of
              certain investments. By doing so, we can help our clients manage
              their wealth responsibly and sustainably.
            </p>
          </div>
          <div class="wealth-mgt">
            <p>contact our financial adviser<br />for more details</p>
            <input type="submit" name="submit" value="Contact Adviser" class="form-btn" />
          </div>
        </section>
        <section class="user-col2" id="biz-lending-section" style="display: none">
          <div class="business-header">
            <h1>BUSINESS LENDING</h1>
            <p>
              Unlock Your Business Potential with Business Lending: Get the
              Financial Tools You Need to Start Up
            </p>
          </div>
          <div class="business-lend">
            <div class="row">
              <div class="plans-col">
                <div class="mortgage">
                  <h4>Mortgages Lending</h4>
                  <input type="submit" name="submit" value="Apply" class="form-btn" />
                </div>
              </div>
              <div class="plans-col">
                <div class="portfolio">
                  <h4>Portfolio Lending</h4>
                  <input type="submit" name="submit" value="Apply" class="form-btn" />
                </div>
              </div>
            </div>
          </div>
        </section>
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
        $("#banking").click(function () {
          $("div#banking-div").show();
          $("#investment-section").hide();
          $("#wealth-mgt-section").hide();
          $("#biz-lending-section").hide();
          $(this).css({
            "background-color": "#c0c0c0",
            color: "#eee",
          });
          $("#investment, #wealth-mgt, #biz-lending").css({
            "background-color": "#ccc",
          });
          return false;
        });
        $("#investment").click(function () {
          $("#investment-section").show();
          $("#wealth-mgt-section").hide();
          $("#biz-lending-section").hide();
          $("div#banking-div").hide();
          $(this).css({
            "background-color": "#c0c0c0",
            color: "#eee",
          });
          $("#banking, #wealth-mgt, #biz-lending").css({
            "background-color": "#ccc",
          });
          return false;
        });
        $("#wealth-mgt").click(function () {
          $("#wealth-mgt-section").show();
          $("#investment-section").hide();
          $("#biz-lending-section").hide();
          $("div#banking-div").hide();
          $(this).css({
            "background-color": "#c0c0c0",
            color: "#eee",
          });
          $("#investment, #banking, #biz-lending").css({
            "background-color": "#ccc",
          });
          return false;
        });
        $("#biz-lending").click(function () {
          $("#biz-lending-section").show();
          $("#investment-section").hide();
          $("#wealth-mgt-section").hide();
          $("div#banking-div").hide();
          $(this).css({
            "background-color": "#c0c0c0",
            color: "#eee",
          });
          $("#investment, #wealth-mgt, #banking").css({
            "background-color": "#ccc",
          });
          return false;
        });
      });
    </script>
  </body>

    </html>