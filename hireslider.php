<?php
$result = SmartcarDB::getInstance()->get_all_cars_hire();

$counter =0;
?>
<div class="container text-center">
    
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="6000" id="fruitscarousel">

    <div class="carousel-inner">
<?php
            while ($row = mysqli_fetch_array($result)) {
                $counter++;
             $actual_amount =   number_format($row['actual_amount']);
        if ($counter == 1){
         
            echo '
       
        <div class="item active">
           <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="http://smartcars.co.ke/admin/uploads/'.$row['image_path'].'" class="img-responsive">
            <div class="carousel-caption">
        
<p style="color: #1169F3;"><i class="mdi mdi-car"></i>'.substr($row["title"], 0, 35).'</p>
        <p style="color: #e65100;"><i class="mdi mdi-format-line-weight"></i>Ksh '.$actual_amount.'<span style="float: right; padding-right:10px;"><i class="mdi mdi-format-line-weight"></i>View Details »</span></p>
       </div></a>
            </div>
        </div>
        
           ';
        }
        
        else {
            echo '
        <div class="item">
          <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="http://smartcars.co.ke/admin/uploads/'.$row['image_path'].'" class="img-responsive">
              <div class="carousel-caption">
        
             <p style="color: #1169F3;"><i class="mdi mdi-car"></i>'.substr($row["title"], 0, 35).'</p>
         <p style="color: #e65100;"><i class="mdi mdi-format-line-weight"></i>Ksh '.$actual_amount.'<span style="float: right; padding-right:10px;"><i class="mdi mdi-format-line-weight"></i>View Details »</span></p>
      </div></a>
            </div>
        </div>
        
        ';
        }
        ?>
<!--        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/car.jpg" class="img-responsive">
              <div class="carousel-caption">
        
       <p style="color: #0C6EED;"><i class="mdi mdi-car"></i>LA is always so much fun!</p>
       <p style="color: #000;"><i class="mdi mdi-format-line-weight"></i>LA is always so much fun!</p>
      </div></a>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/car.jpg" class="img-responsive">
                 <div class="carousel-caption">
        
     <p style="color: #0C6EED;"><i class="mdi mdi-car"></i>LA is always so much fun!</p>
       <p style="color: #000;"><i class="mdi mdi-format-line-weight"></i>LA is always so much fun!</p>
      </div></a>
            </div>
        </div>
        <div class="item">
            <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/car.jpg" class="img-responsive">
               <div class="carousel-caption">
        
     <p style="color: #0C6EED;"><i class="mdi mdi-car"></i>LA is always so much fun!</p>
        <p style="color: #000;"><i class="mdi mdi-format-line-weight"></i>LA is always so much fun!</p>
      </div></a>
            </div>
        </div>-->
        
     <?php
            }
            //echo $counter;
?>   
    </div>

    <a class="left carousel-control" href="#fruitscarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#fruitscarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> 

</div>
</div>


 

