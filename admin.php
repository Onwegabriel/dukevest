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
      <!---<div class="second-text-box">
        <h1>DUKEVEST</h1>
      </div>--->
    </section>
    <section id="menu">
      <div class="user-row">
        <div class="user-col">
          <div class="logo">
            <h2>DukeVest</h2>
          </div>
          <div class="img-area">
            <img src="images/user.jpeg" />
          </div>
          <div class="clientname">
            <h3>Admin</h3>
          </div>
          <div class="admin-items">
            <li id="client"><a href="">CLIENT</a></li>
            <li id="product"><a href="">PRODUCT</a></li>
            <li id="payment"><a href="">PAYMENT</a></li>
          </div>
        </div>
        <div class="user-col2">
          <div class="board client">
            <table width="100%">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Status</td>
                  <td>Plan</td>
                  <td>Payment</td>
                  <td>Region</td>
                </tr>
              </thead>
              <tbody>
                <tr class="admin-row">
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>Pending</p>
                  </td>
                  <td>
                    <p>Investment</p>
                  </td>
                  <td>
                    <p>USD 5</p>
                  </td>
                  <td>
                    <p>USA</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Approved</p>
                  </td>
                  <td>
                    <p>Banking</p>
                  </td>
                  <td>
                    <p>CAD 5</p>
                  </td>
                  <td>
                    <p>Canada</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>3</p>
                  </td>
                  <td>
                    <p>Disapproved</p>
                  </td>
                  <td>
                    <p>Business Lending</p>
                  </td>
                  <td>
                    <p>EUR 5</p>
                  </td>
                  <td>
                    <p>UK</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="board product">
            <table width="100%">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Industry</td>
                  <td>Plan</td>
                  <td>Duration</td>
                  <td>New Client</td>
                </tr>
              </thead>
              <tbody>
                <tr class="admin-row">
                  <td>
                    <p>1</p>
                  </td>
                  <td>
                    <p>Energy</p>
                  </td>
                  <td>
                    <p>Investment</p>
                  </td>
                  <td>
                    <p>2 months</p>
                  </td>
                  <td>
                    <p>0</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>2</p>
                  </td>
                  <td>
                    <p>Healthcare</p>
                  </td>
                  <td>
                    <p>Banking</p>
                  </td>
                  <td>
                    <p>5 months</p>
                  </td>
                  <td>
                    <p>7</p>
                  </td>
                </tr>
                <tr class="admin-row">
                  <td>
                    <p>3</p>
                  </td>
                  <td>
                    <p>Foreign Exchange</p>
                  </td>
                  <td>
                    <p>Business Lending</p>
                  </td>
                  <td>
                    <p>3 months</p>
                  </td>
                  <td>
                    <p>22</p>
                  </td>
                </tr>
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
                    <p>Disapproved</p>
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
  </body>

    </html>