<?php
include 'header.php';
include_once 'db.php';


$make = (!empty($_GET['make']) ? $_GET['make'] : null);

$car_status = (!empty($_POST['status']) ? $_POST['status'] : null);

?>
<style>
    .cd{
        height: 400px;
    }
    /* The alert message box */
.alert {
    padding: 20px;
    background-color: #f44336; /* Red */
    color: white;
    margin-bottom: 15px;
}

/* The close button */
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
    color: black;
}
</style>


    
<?php
if($make == true)
{
    include 'searchmake.php';
    ?>
    <div class="row blue" id="searchbymake" style="margin-top: 20px;   width: 90%;">
    <h4 style="color: #fff; font-size: 20px; padding-left: 5px;"><i class="mdi mdi-format-line-weight"></i>Search Results for <span style="color: #000"><?php echo $make;?></span></h4>
  
</div>
<div class="row" style="margin-top: -30px;   width: 90%;">
    <?php

            $result = SmartcarDB::getInstance()->get_car_by_make($make);
            if (mysqli_fetch_array($result)){
            while ($row = mysqli_fetch_array($result)) {
                echo '
  <div class="col s12 m3">
        <div class="icon-block">
        <a href="">
            <h2 class="center light-green-text"><img src="http://smartcars.co.ke/admin/uploads/'.$row['image_path'].'" class="img-responsive" width="100%" height="120px"></h2>
            <p style="color: #0000; background-color:#eee; height: 70px; padding-top: 5px;margin-top: -22px; "><i class="mdi mdi-car"></i>
            <span style="color: #0C6EED">'.substr($row["title"], 0, 40).'</span>
         <br/><br/><i class="mdi mdi-format-line-weight"></i> Ksh '.number_format($row['actual_amount']).'</p>
</a>             
</div>
    </div>               
';
            } 
            mysqli_free_result($result);
            }
            
            else { ?>
               <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';" >&times;</span> 
 <span style="font-size: 18px;"> No results for <?php echo $make;?>, please try later </span>
</div>
            <?php
          
            }
            
            }
            
            
            elseif($car_status == 'Sale')
{
$car_make = (!empty($_POST['make']) ? $_POST['make'] : null);
$car_model = (!empty($_POST['model']) ? $_POST['model'] : null);
$min_price = (!empty($_POST['min_price']) ? $_POST['min_price'] : null);
$max_price = (!empty($_POST['max_price']) ? $_POST['max_price'] : null);

include 'car_search.php';
                ?>
    
    <div class="row blue" id="searchbymake" style="margin-top: 20px;   width: 90%;"> 
        <h4 style="font-size: 20px; padding-left: 5px;"><i class="mdi mdi-format-line-weight"></i><a href="http://www.smartcars.co.ke/new"><span style="color:rgb(255, 240, 0);">Home » </span></a><span style="color: #fff;">Search Results for</span> <span style="color: #000"><?php echo $car_make;?> <?php echo $car_model;?></span></h4>
  
</div>
    
<div class="row" style="margin-top: -30px;   width: 90%;">  
  <?php

$result = SmartcarDB::getInstance()->get_car_by_search($car_make,$car_model,$min_price,$max_price);
            if (mysqli_fetch_array($result)){
            while ($row = mysqli_fetch_array($result)) {
                echo '
  <div class="col s12 m3">
        <div class="icon-block">
        <a href="">
            <h2 class="center light-green-text"><img src="http://smartcars.co.ke/admin/uploads/'.$row['image_path'].'" class="img-responsive" width="100%" height="120px"></h2>
            <p style="color: #0000; background-color:#eee; height: 70px; padding-top: 5px;margin-top: -22px; "><i class="mdi mdi-car"></i>
            <span style="color: #0C6EED">'.substr($row["title"], 0, 40).'</span>
         <br/><br/><i class="mdi mdi-format-line-weight"></i>  <span style="color: #0C6EED">Ksh '.number_format($row['actual_amount']).'</p>
</a>             
</div>
    </div>               
';
            } 
            mysqli_free_result($result);
            }
            
            else { ?>
               <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';" >&times;</span> 
 <span style="font-size: 18px;"> No results for <?php echo $car_make.' '.$car_model;?>, please try later </span>
</div>
            <?php
          
            }
            
            }
            
            ?>
</div>
<?php
include 'servicesarea.php';
include 'accessoriesarea.php';
include 'footer.php';
?>
        

           
       