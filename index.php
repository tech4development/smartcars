<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Starter Template - Materialize</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        
    </head>
    <body>
        <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper  green darken-4">
                <a href="#!" class="brand-logo"><img src="images/SmartCars-Logo.png" style="height: 65px;"></a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Car Insurance</a></li>
                    <li><a href="badges.html">Car Accessories</a></li>
                    <li><a href="sass.html">Car Tracking</a></li>
                    <li><a href="badges.html">Car Importers</a></li>
                    <li><a href="sass.html">Advertise Car</a></li>
                    <li><a href="badges.html">My Account</a></li>
                    <li><a href="sass.html">Pricing</a></li>
                    <li><a href="badges.html">Login/Register</a></li>
                </ul>

                <ul class="side-nav" id="mobile-demo">
                  <li><a href="sass.html">Insurance</a></li>
                    <li><a href="badges.html">Accessories</a></li>
                    <li><a href="sass.html">Tracking</a></li>
                    <li><a href="badges.html">Importers</a></li>
                    <li><a href="sass.html">Advertise Car</a></li>
                    <li><a href="badges.html">My Account</a></li>
                    <li><a href="sass.html">Pricing</a></li>
                    <li><a href="badges.html">Login/Register</a></li>
                </ul>
            </div>
        </nav>
        </div>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Starter Template</h1>
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
                <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
                </div>
                <br><br>

            </div>
        </div>


        <div class="container">

            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section">
                <div class="row">
                    <form class="col s6">
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                <label for="disabled">Disabled</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                This is an inline input field:
                                <div class="input-field inline">
                                    <input id="email" type="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row yellow" style="margin-bottom: 0px !important;">
            <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-green-text"><i class="material-icons large">flash_on</i></h2>
                            <h5 class="center">Hustle Free</h5>

                            <p class="light">For your peace of mind, we have partnered with 1000(s) of trusted dealers and individuals to ensure that you get quality and affordable cars at the best market rates. Whether you are looking for a new or a used car, we are sure you will find it here.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-green-text"><i class="material-icons large">person_pin</i></h2>
                            <h5 class="center">Who We Are</h5>

                            <p class="light">With history-checked cars and innovative search options, there are many ways smartcars.co.ke can help you to find your next car. We list a wide range of new and used cars for sale from trusted dealers and individuals, so you can be confident of finding the right car for your needs.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-green-text"><i class="material-icons large">settings</i></h2>
                            <h5 class="center">You Are Home</h5>

                            <p class="light">Buying and selling your vehicle is now even easier through smartcars.co.ke. You can quickly and easily setup an account to advertise your vehicle for sale at a small fee.</p>
                        </div>
                    </div>
                </div>
        <footer class="page-footer green darken-4">
            <div class="section">
               
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Company Bio</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Settings</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Link 1</a></li>
                            <li><a class="white-text" href="#!">Link 2</a></li>
                            <li><a class="white-text" href="#!">Link 3</a></li>
                            <li><a class="white-text" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                </div>
            </div>
        </footer>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
<script>
    $(document).ready(function () {
        $('.slider').slider();
        $(".button-collapse").sideNav();
        $(".button-collapse").sideNav();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
    });

</script>