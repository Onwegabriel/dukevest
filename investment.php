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
        <h1>INVESTMENT</h1>
        <p>
          Our investment services and tools are the best in the industry, making
          them the perfect choice for businesses, entrepreneurs and
          business-minded individuals. Professional and experienced, we provide
          the highest quality resources to help you make informed decisions
          about your investments. Moreover, our services and tools are designed
          to maximize your profits and minimize your risks.
        </p>
      </div>
      <div class="invest">
        <div class="invest-form">
          <form>
            <label for="region">Select Your Region</label>
            <select id="region">
              <option value="australia">Australia</option>
              <option value="usa">USA</option>
              <option value="uk">UK</option>
              <option value="canada">Canada</option>
              <option value="india">India</option>
              <option value="pakistan">Pakistan</option>
              <option value="nepal">Nepal</option>
            </select>
            <label for="industry">Select Industry</label>
            <select id="industry">
              <option value="it">Information Technology</option>
              <option value="health">Healthcare (Pharmamedical)</option>
              <option value="energy">Energy</option>
              <option value="fx">Foreign Exchange (FX)</option>
            </select>
            <label for="income">How Much Do You Earn?</label>
            <input type="number" name="income" />
          </form>
          <input type="submit" name="submit" value="Submit" class="form-btn" />
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
