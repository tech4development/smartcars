<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Smartcars</title>
        
            <style>
   /* Style the tab */
div.tab {
    overflow: hidden;
    border: 0px solid #16a1ed;
    background-color: transparent;
    width: 70%;
    border-radius: 5px;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}



/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ff8700 !important;
    margin-right: 10px;
}
#tab1 {
    background-color: #16a1ed;
    margin-right: 10px;
}
#defaultOpen {
    background-color: #16a1ed;
    margin-right: 10px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ff8700 !important;
    margin-right: 10px;
}
/* Style the tab content */
.tabcontent {
    display: none;
padding: 6px 12px;
border: 1px solid #fff;
border-top: none;
background-color: #fff;
opacity: .7;
border-radius: 5px;
} 

.tabcontent {
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
        </style>

        <!-- CSS  -->
       
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
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