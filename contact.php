<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial scale=1.0" />
        <title>DukeVest</title>
        <link href="style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="sub-header"> <!--- adds the navigation bar --->
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
                <h2>Contact Us</h2>
            </div>
        </section>
        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-home"></i>
                        <span>
                            <h5>London</h5>
                            <p>United Kingdom</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <span>
                            <h5>+44 7425 519606</h5>
                            <p>Monday to Saturday, 10AM to 6PM</p>
                        </span>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>Quincysoty@yahoo.com</h5>
                            <p>Email us your query</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form action="">
                        <input type="text" placeholder="Enter your name" required>
                        <input type="email" placeholder="Enter your email" required>
                        <input type="text" placeholder="Enter your chosen plan" required>
                        <textarea rows="8" placeholder="Message"></textarea>
                        <button type="submit" class="sign-up-link">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
        <!----- footer ----->
        <section class="footer">
            <h4>Dukevest</h4>
                <p>Explore the best investment portals and glide your way into financial freedom</p>
                    <div class="icons"> <!---- adds the contact icons ---->
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-whatsapp"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
        </section>
    </body>
</html>