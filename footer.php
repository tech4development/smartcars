<style>
    .white-text{
        font-weight: bold;
        font-size: 150%;
    }
    #icon{
        background-color: white;
        border-radius: 50%;
        border: 1x solid grey;
        padding:15px;
    }
    #map {
        height: 250px;
        width: 100%;
    }
</style>
<div class="row yellow" style="margin-bottom: 0px !important; text-align: center;">
    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center light-green-text"><span id="icon" class="mdi mdi-car" style="color:red;"></span></h2>
            <h5 class="center">Hustle Free</h5>

            <p class="light">For your peace of mind, we have partnered with 1000(s) of trusted dealers and individuals to ensure that you get quality and affordable cars at the best market rates. Whether you are looking for a new or a used car, we are sure you will find it here.</p>
        </div>
    </div>

    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center light-green-text"><span id="icon" class="mdi mdi-account-multiple" style="color:red;"></span></h2>
            <h5 class="center">Who We Are</h5>

            <p class="light">With history-checked cars and innovative search options, there are many ways smartcars.co.ke can help you to find your next car. We list a wide range of new and used cars for sale from trusted dealers and individuals, so you can be confident of finding the right car for your needs.</p>
        </div>
    </div>

    <div class="col s12 m4">
        <div class="icon-block">
            <h2 class="center light-green-text"><span id="icon" class="mdi mdi-home-map-marker" style="color:red;"></span></h2>
            <h5 class="center">You Are Home</h5>

            <p class="light">Buying and selling your vehicle is now even easier through smartcars.co.ke. You can quickly and easily setup an account to advertise your vehicle for sale at a small fee.</p>
        </div>
    </div>
</div>
<footer class="page-footer green darken-4">
    <div class="section">

        <div class="row" style="margin-left: 5%; margin-right: 5%;">
            <div class="col l4 s12">
                <h5 class="center white-text blue lighten-2">Important Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-4" href="#!">How it Works</a></li>
                    <li><a class="grey-text text-lighten-4" href="#!">How to upload a car</a></li>
                    <li><a class="grey-text text-lighten-4" href="#!">Payment Packages</a></li>
                    <li><a class="grey-text text-lighten-4" href="#!">How to make payment</a></li>
                    <li><a class="grey-text text-lighten-4" href="#!">Frequently Asked Question</a></li>
                    <li><a class="grey-text text-lighten-4" href="#!">Report a complaint</a></li>

                </ul>
            </div>
            <div class="col l4 s12">
                <h5 class="center white-text blue lighten-2">Social Links</h5>
                <p><span class="mdi mdi-48px mdi-facebook-box" style="color: #006dc3; margin-right: 10%;margin-left: 10%;"></span><span class="mdi mdi-48px mdi-twitter-box" style="color: #98cdf7; margin-right: 10%;"></span><span class="mdi mdi-48px mdi-google-plus-box" style="color: rgb(236, 0, 0); margin-right: 10%;"></span><span class="mdi mdi-48px mdi-linkedin-box" style="color: #007bb6;"></span>
                    <span class="mdi mdi-48px mdi-instagram" style="color: rgb(197, 39, 106); margin-right: 10%;margin-left: 10%;"></span><span class="mdi mdi-48px mdi-youtube-play" style="color: red; margin-right: 10%;"></span></p>

            </div>

            <div class="col l4 s12">
                <h5 class="center white-text blue lighten-2">Our Contacts</h5>
                <div id="map"></div>
                <p class="orange-text">Tel: +254 706909947.  &nbsp;
                    Email: outreach@t4d.co.ke </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://t4d.co.ke">T4D</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKiOwaa79v0mOhDRmN-RdH39Hjb1_3ULk&callback=initMap" type="text/javascript"></script>
</body>
    </html>
<script>
        $(document).ready(function () {
        $('.slider').slider();
        $(".button-collapse").sideNav();
        $(".button-collapse").sideNav();
        $('.carousel.carousel-slider').carousel({fullWidth: true});
    $(".dropdown-button").dropdown();
    });

        function initMap() {

        var uluru = {lat: -1.264174, lng: 36.790321};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
        center: uluru
        });
            var marker = new google.maps.Marker({
            position: uluru,
        map: map
    });
    }

<!--start of script for tab-->
    
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            
            // Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                
                // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
(function($) {
                $(function() {

$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      hover: true, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );

                }); // End Document Ready
})(jQuery); // End of jQuery name space
//<!--end of script for tab-->


</script>



