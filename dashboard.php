<?php
?>
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
    <title>Dashboard</title>
</head>
<body>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="active"><a href="dashboard.html">Dashboard</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="tabbed-menu">
            <section class="tabbed-menu-tab form-contact form-login display-block">
                <div class="tabbed-menu-header"><h3>Login</h3></div>
                <form method="POST" action="#">
                    <label>
                        Name:<br>
                        <input type="email" placeholder="Enter your email" name="username" required><br>
                    </label>
                    <label>
                        Password:<br>
                        <input type="password" placeholder="Enter your password" name="password" required><br>
                    </label>
                    <input type="submit" value="Submit" class="form-submit-button">
                </form>
                <button onclick="toggleTabbedMenu('login')">Don't have an account. Create one here.</button>
            </section>

            <section class="tabbed-menu-tab form-contact  form-signup display-none">
                <div class="tabbed-menu-header"><h3>SignUp</h3></div>
                <form method="POST" action="#">
                    <label>
                        Name:<br>
                        <input type="text" placeholder="Enter your name here" name="username" required><br>
                    </label>
                    <label>
                        Email:<br>
                        <input type="email" placeholder="Enter your email here" name="username" required><br>
                    </label>
                    <label>
                        Password:<br>
                        <input type="password" placeholder="Enter your password" name="password" required><br>
                    </label>
                    <input type="submit" value="Submit"  class="form-submit-button">
                </form>
                <button onclick="toggleTabbedMenu('signup')">Already have an account. Login here.</button>
            </section>
        </section>

        <section>

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