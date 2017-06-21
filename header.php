<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Smartcars</title>
        
         <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
         
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function() {
        
	jQuery('.carousel[data-type="multi"] .item').each(function(){
		var next = jQuery(this).next();
		if (!next.length) {
			next = jQuery(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo(jQuery(this));
	  
		for (var i=0;i<2;i++) {
			next=next.next();
			if (!next.length) {
				next = jQuery(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}
	});
        
});
</script>
<style>
   .carousel-caption {
/*       background-color: #2196F3 ;*/
background-color: #eee ;
width: 90%;
margin-left: -47px;
margin-bottom: -100px;
    } 
       .carousel-caption p {
padding-left: 10px;
    } 
    
.carousel-control.left, .carousel-control.right {
	background-image:none;
}

.img-responsive{
	width:100%;
	height:auto;
}

@media (min-width: 992px ) {
	.carousel-inner .active.left {
		left: -25%;
	}
	.carousel-inner .next {
		left:  25%;
	}
	.carousel-inner .prev {
		left: -25%;
	}
}

@media (min-width: 768px) and (max-width: 991px ) {
	.carousel-inner .active.left {
		left: -33.3%;
	}
	.carousel-inner .next {
		left:  33.3%;
	}
	.carousel-inner .prev {
		left: -33.3%;
	}
	.active > div:first-child {
		display:block;
	}
	.active > div:first-child + div {
		display:block;
	}
	.active > div:last-child {
		display:none;
	}
}

@media (max-width: 767px) {
	.carousel-inner .active.left {
		left: -100%;
	}
	.carousel-inner .next {
		left:  100%;
	}
	.carousel-inner .prev {
		left: -100%;
	}
	.active > div {
		display:none;
	}
	.active > div:first-child {
		display:block;
	}
}

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


::-webkit-input-placeholder { /* Chrome */
  color: #000 !important;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #000 !important;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #000 !important;
  opacity: 1 !important;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: #000 !important;
  opacity: 1 !important;
}

html, html a {
    -webkit-font-smoothing: antialiased;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.004);
}
        </style>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
        <script src="http://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
        <div class="navbar-fixed">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Insurance</a></li>
                <li><a href="#!">Accessories</a></li>

                <li><a href="#!">Tracking</a></li>
                <li><a href="#!">Importers</a></li>
            </ul>
            <nav>
                <div class="nav-wrapper  green darken-4">
                    <a href="index.php" class="brand-logo"><img src="images/SmartCars-Logo.png" style="height: 65px;"></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<span class="mdi mdi-chevron-down right" style="line-height: 66px;"></span></a></li>
                        <li><a href="">Advertise Car</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Login/Register</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="">Insurance</a></li>
                        <li><a href="">Accessories</a></li>
                        <li><a href="">Tracking</a></li>
                        <li><a href="">Importers</a></li>
                        <li><a href="">Advertise Car</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Login/Register</a></li>
                    </ul>
                </div>
            </nav>
        </div>
