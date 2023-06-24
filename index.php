<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <title>DukeVest</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="indexj.js"></script>
  </head>

  <body>
    <section class="header">
      <!--- adds the navigation bar --->
      <nav id="home" class="same-line">
        <!-- puts both .left & .right one same line -->
        <div class="nav-left">
          <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="#ourplans">PLANS</a></li>
            <li><a href="#aboutus">ABOUT US</a></li>
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
      <div class="text-box">
        <h1>DUKEVEST</h1>
        <a href="./signup.php" class="sign-up-link">Sign Up</a>
        <!---- adds the sign up link and makes it clickable --->
      </div>
    </section>

    <!----- plans ----->
    <section class="plans">
      <h1 id="ourplans">Our Plans</h1>
      <p>
        Unlock Your Financial Future with this Financial Company's Products and
        Plans!
      </p>
      <div class="row">
        <div class="plans-col">
          <!--- adds the column for the banking image --->
          <img src="images/banking mgt.jpg" />
          <div class="layer" id="banking">
            <h3>BANKING</h3>
            
          </div>
        </div>
        <div class="plans-col">
          <img src="images/invest landing.jpg" />
          <!--- adds the column for the investment image --->
          <div class="layer" id="investment">
            <h3>INVESTMENT</h3>
            
          </div>
        </div>
      </div>
      <div class="second-row">
        <div class="plans-col">
          <img src="images/wealth mgt.jpg" />
          <!--- adds the column for the wealth management image --->
          <div class="layer" id="wealth-mgt">
            <h3>WEALTH MANAGEMENT</h3>
            
          </div>
        </div>
        <div class="plans-col">
          <img src="images/business lending.jpg" />
          <!--- adds the column for the business lending image --->
          <div class="layer" id="biz-lending">
            <h3>BUSINESS LENDING</h3>
            
          </div>
        </div>
      </div>
    </section>
    <!----- about us ---->
    <section id="aboutus" class="about-us">
      <h1>About Us</h1>
      <p>
        DUKEVEST is an investment and wealth management company that has been
        helping clients and customers create long lasting wealth for over 30
        years. Our team consists of experienced professionals who possess an
        in-depth understanding of the financial markets and industry. We offer a
        full suite of services and products for clients and customers looking to
        invest for the long-term.
      </p>
      <p>
        We understand that each person's financial situation is unique and
        requires individualized attention. That is why we work with each
        customer to understand their current financial situation and develop a
        plan that is tailored to their long-term investment goals. We offer a
        range of services and products, including managed portfolios, mutual
        funds, stocks and bonds, annuities, and more. Our team of dedicated and
        knowledgeable professionals is always available to provide personalized
        advice and guidance.
      </p>
      <p>
        At DUKEVEST, we are committed to helping our customers realize their
        long-term financial goals. Our team of experts is highly knowledgeable
        and experienced and takes the time to understand each customer's
        individual situation. We use our in-depth understanding of the financial
        markets and industry to develop custom strategies for each customer. Our
        experienced team of professionals is always available to provide advice
        and take the time to answer any questions our customers may have. We
        believe in providing our customers with the best investment plans and
        products to create long lasting wealth. Our team of professionals uses
        their extensive knowledge and experience to develop comprehensive
        strategies for each customer's unique financial situation. We strive to
        provide our customers with optimal returns, while ensuring their
        investments are secure and protected.
      </p>
      <p>
        At DUKEVEST, we believe in helping our customers achieve their long-term
        financial goals. Our team of dedicated professionals is always available
        to provide advice, guidance, and support. We are committed to providing
        our customers with the best investment plans and products to create long
        lasting wealth.
      </p>
    </section>
    <!----- footer ----->
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
          $("#banking-txt").show();

        })
        $("#investment").click(function () {
          $("#investment-txt").show();

        })
        $("#wealth-mgt").click(function () {
          $("#wealth-mgt-txt").show();

        })
        $("#biz-lending").click(function () {
          $("#biz-lending-txt").show();

        })

      })
    </script>
  </body>

    </html>