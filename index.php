<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="icons/favicon.png" type="image/gif">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
    <title>SM</title>
</head>
<body>
    <section id="message-top" style="display:none;"></section>
    <header>
        <div class="site-title">
            <h1><a href="index.html">SubsManager</a></h1>
        </div>
        <div class="site-tagline">
            <p><i>Secrets of subscription management</i></p>
        </div>
        <div class="menu-bars"  onclick="onMenuBarClick()">
            <img src="icons/bar.svg" id="menu-bar-image">
        </div>
        <nav class="header-nav">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
            </ul>
        </nav>
        <section class="full-width-banner">
            <section class="banner-text">Take care of your subscriber management needs using our powerful web app<br></section>
            <button onclick="printMessageTop()">Live Demo</button>
        </section>
    </header>

    <main>
        <section class="alternate-style-container">
                <div>
                    <i class="fa fa-user-plus" style="font-size:72px; color: #c6ff00;"></i>
                    Adding a new subscriber is breeze. Easily add one from the Dashboard.
                </div>
                <div>
                    <i class="fa fa-vcard" style="font-size:72px; color: #c6ff00;"></i>
                    Manage internal users, if you are the admin. Create new user, give privileges.    
                </div>
                <div>
                    <i class="fa fa-shopping-cart" style="font-size:72px; color: #c6ff00;"></i>
                    Add, and update subscription info, and payment details. Clean user interface. 
                </div>
                <div>
                    <i class="fa fa-info-circle" style="font-size:72px; color: #c6ff00;"></i>
                    Finding general info, subscription details, address of subscibers with ease. 
                </div>

        </section>
    </main>

    <footer>
        <nav class="footer-nav">
            <ul>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="not-found.html">Work with us</a></li>
            </ul>
        </nav>
        <div class="footer-address">
            <b>Address</b><br>
            Redmond<br>
            Washington, USA<br>
        </div>

        <div class="footer-copyright">
            &copy; 2018 All rights reserved.
        </div>
    </footer>
</body>
</html>