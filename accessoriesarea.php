<style>
    .slant{
        -webkit-transform:skewX(20deg);
        -ms-transform:skewX(20deg);
        transform:skewX(20deg);
        background-color: rgba(90, 74, 199, .8);
        border-right:1px solid #fff ;

    }
    .cont{
        -webkit-transform:skewX(-20deg);
        -ms-transform:skewX(-20deg);
        transform:skewX(-20deg);


    }
    @media only screen and (max-width: 600px){
        .slant {

            margin-bottom: 20px;
            float: right;

            -webkit-transform:skewX(0deg);
            -ms-transform:skewX(0deg);
            transform:skewX(0deg);
            background-color: rgba(90, 74, 199, .8);
            border-right:1px solid #fff ;
        }
          .cont{
        -webkit-transform:skewX(0deg);
        -ms-transform:skewX(0deg);
        transform:skewX(0deg);


    }
    }
    #aa{
        border-radius: 10px;
        width: auto;
        margin-bottom: 2px;
    }
    #imga{
        height: 100px;
        width: 100px;
        border-radius: 50%;
        padding: 15px;
        margin-top: -20px;
    }
    #txt{
        margin-top: -2%;
    }
</style>
<div class="row" style="margin-top: 20px;   width: 90%;">
    <div class="col s12 m4 orange darken-4 slant" >
        <div class="cont center">
            <span><img id="imga" src="images/Spare-Parts.png" style="  background-color: #e65100;"></span>
            <h3 id="txt" class="white-text">Auto spares and Accessories</h3>
            <a href="#" class="waves-effect waves-light btn  yellow darken-4">Get Spares <span class="mdi mdi-chevron-double-right" style=""></span></a>


        </div>
    </div>
    <div class="col s12 m4 yellow darken-4 slant">
        <div class="cont center">
            <span><img id="imga" src="images/parts.png" style="  background-color: #f57f17;"></span>

            <h3 id="txt"  class="white-text">Auto Garage</h3>
            <a href="#" class="waves-effect waves-light btn  blue darken-4">View Garage<span class="mdi mdi-chevron-double-right" style=""></span></a>

        </div>
    </div>
    <div class="col s12 m4 blue darken-4 slant">
        <div class="cont center">
            <span><img id="imga" src="images/diagnose.png" style="  background-color: #0D47A1;"></span>

            <h3 id="txt"  class="white-text">Car Diagnostics</h3>
            <a href="#" class="waves-effect waves-light btn  orange darken-4">Diagnose<span class="mdi mdi-chevron-double-right" style=""></span></a>

        </div>
    </div>
</div>