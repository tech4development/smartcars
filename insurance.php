<?php
include 'header.php';
include_once 'db.php';
?>
<style>
    .cd{
        height: 400px;
    }
</style>
<div class="row" style="margin-top: 20px;   width: 90%;">
<?php
            $result = SmartcarDB::getInstance()->get_insurors();
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="card col s12 m4 cd">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="images/office.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            <p><a href="#">This is a link</a></p>
        </div>
        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
    </div>';
            }
            mysqli_free_result($result);
            
            ?>
</div>
<?php
include 'servicesarea.php';
include 'accessoriesarea.php';
include 'footer.php';
?>
        
 