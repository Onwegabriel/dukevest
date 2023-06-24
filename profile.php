<?php
require_once("dbconfig.php");

if (isset($_POST['upload'])) {
    $userid=intval($_GET['id']);

    $file_name=$_FILES['file']['name'];
    $file_temp=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_type=$_FILES['file']['type'];

    $location="upload/".$file_name;
    if ($file_size < 524880) {
        if (move_uploaded_file($file_temp,$location)) {
            try {
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE users SET photo='$location' WHERE id='$userid'";
                $dbh->exec($sql);
            } catch (PDOEexception $e) {
                echo $e->getMessage();
            }
            $dbh = null;
            header('location:client.php');
        }
    }else {
        echo"<script>alert('File Size is to large to Upload');</script>";
    }
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
        <?php
         $userid=intval($_GET['id']);
         $sql ="SELECT * FROM users WHERE id='$userid'";
         $query=$dbh->prepare($sql);
         $query->execute();
         $result=$query->fetchAll();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Profile upload</h3>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Upload here</label>
                            <input type="file" name="file" class="form-control" required>
                        </div>
                        <button type="submit" name="upload" class="btn btn-danger">Upload</button>
                    </form>
                </div>
            </div>
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