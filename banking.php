<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="style.css" rel="stylesheet" />
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
            <li><a href="">SEARCH</a></li>
            <li><a href="./signin.php">SIGN IN</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
          </ul>
        </div>
      </nav>
      <div class="second-text-box">
        <h1>DUKEVEST</h1>
      </div>
    </section>
    <section>
      <div class="plan-headers">
        <h1>BANKING</h1>
        <p>
          Banking is a vital part of managing personal finances. For the
          everyday business man and woman, entrepreneur, banking is an important
          part of financial planning, providing the means to save, invest, and
          access necessary funds. Our banking services can help with budgeting
          and achieving financial goals, such as saving for retirement or a
          home.
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
              <input
                type="submit"
                name="submit"
                value="Switch Account"
                class="form-btn"
              />
            </div>
          </div>
          <div class="plans-col">
            <img src="images/user.jpeg" />
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
