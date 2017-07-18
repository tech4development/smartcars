<?php
include('header.php');
error_reporting(E_ALL);
//http://www.w3schools.com/howto/howto_js_tabs.asp
?>



<div class="container mtb">
    <br/><br/><br/>
    <div class="row">

        <! -- SINGLE POST -->
        <div class="col-lg-8">
            <! -- Blog Post 1 -->

            <?php
            // To display Error messages

            if (isset($_GET['vl'])) {
                $save = $_GET['vl'];
            } else {
                $save = 'vl';
            }
            if ($save == 'fy') {
                echo "<h4>Car Details Successfully Updated</h4>
       ";
            } else if ($save == 'pro') {
                echo "<h4 style='color: #ff0000; font-size: 14px; padding-top: 10px;'>Your advert has been submitted, it will be published once approved</h4>
        ";
            } else if ($save == 'fy1') {
                echo "<h4>Property not saved, please try again</h4>
        ";
            } else if ($save == 'fz') {
                echo "<h4>Photo Successfully Updated</h4>
        ";
            } else if ($save == 'fz1') {
                echo "<h4>Photo not saved, please try again</h4>
        ";
            } else if ($save == 'e') {
                echo "<h4>Please ensure the file you are uploading is an image</h4>
        ";
            } else if ($save == 'z') {
                echo "<h4 style='color: #ff0000; font-size: 15px;'>Car Advert successfully deleted</h4>
        ";
            } else if ($save == 'i') {
                echo "<h4>Land photo not deleted, please try again</h4>
        ";
            }
            ?>

            <h4 ><center><img src="http://www.smartcars.co.ke/assets/img/cars/car.png" alt="" id="imgbig" width="40px" height="40px">&nbsp;Advertise your Car(s)</center></h4>
            <form name="f2" action="save_free_agent_ad.php" method="post" enctype="multipart/form-data">
                <div class='table-responsive'>
                    <table class="table  table-bordered table-hover" >
                        <tbody>




                            <tr class="info"><td>
                                    <table class="table  table-bordered table-hover">
                                        <tbody> 
                                            <tr class="error1">
                                                <td> Your Name</td>
                                                <td>
                                                    <input name="your_name" type="text" class="form-control" value="" required/>
                                                </td>



                                            </tr>

                                            <tr class="error1">
                                                <td> Your Email</td>
                                                <td>
                                                    <input name="email" type="text"  class="form-control" value="" required/>
                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td> Mobile Number</td>
                                                <td>
                                                    <input name="mobile_number" type="text" value="" class="form-control" required/>
                                                </td>



                                            </tr>

                                            <tr class="error1">
                                                <td> Title</td>
                                                <td>
                                                    <input name="userid" type="hidden" value="freeagent"/>
                                                    <textarea name="title" style="width: 100%; height: 100px;" placeholder="e.g. Toyota Probox for Sale " required></textarea>
                                                </td>



                                            </tr>

                                            <tr class="error1">
                                                <td> Country</td>
                                                <td><select name="country" class="form-control" style="width: 100%;" required>
                                                        <option value="">Select Country</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                    </select></td>

                                            </tr>


                                            <tr class="error1">
                                                <td> County</td>
                                                <td><select name="county" class="form-control" style="width: 100%;" required>
                                                        <option value="">Select County</option>
                                                        <option value="Baringo County">Baringo County</option>
                                                        <option value="Bomet County">Bomet County</option>
                                                        <option value="Bungoma County">Bungoma County</option>
                                                        <option value="Busia County">Busia County</option>
                                                        <option value="Elgeyo Marakwet County">Elgeyo Marakwet County</option>
                                                        <option value="Embu County">Embu County</option>
                                                        <option value="Garissa County">Garissa County</option>
                                                        <option value="Homa Bay County">Homa Bay County</option>
                                                        <option value="Isiolo County">Isiolo County</option>
                                                        <option value="Kajiado County">Kajiado County</option>
                                                        <option value="Kakamega County">Kakamega County</option>
                                                        <option value="Kericho County">Kericho County</option>
                                                        <option value="Kiambu County">Kiambu County</option>
                                                        <option value="Kilifi County">Kilifi County</option>
                                                        <option value="Kirinyaga County">Kirinyaga County</option>
                                                        <option value="Kisii County">Kisii County</option>
                                                        <option value="Kisumu County">Kisumu County</option>
                                                        <option value="Kitui County">Kitui County</option>
                                                        <option value="Kwale County">Kwale County</option>
                                                        <option value="Laikipia County">Laikipia County</option>
                                                        <option value="Lamu County">Lamu County</option>
                                                        <option value="Machakos County">Machakos County</option>
                                                        <option value="Makueni County">Makueni County</option>
                                                        <option value="Mandera County">Mandera County</option>
                                                        <option value="Meru County">Meru County</option>
                                                        <option value="Migori County">Migori County</option>
                                                        <option value="Marsabit County">Marsabit County</option>
                                                        <option value="Mombasa County">Mombasa County</option>
                                                        <option value="Muranga County">Muranga County</option>
                                                        <option value="Nairobi County">Nairobi County</option>
                                                        <option value="Nakuru County">Nakuru County</option>
                                                        <option value="Nandi County">Nandi County</option>
                                                        <option value="Narok County">Narok County</option>
                                                        <option value="Nyamira County">Nyamira County</option>
                                                        <option value="Nyandarua County">Nyandarua County</option>
                                                        <option value="Nyeri County">Nyeri County</option>
                                                        <option value="Samburu County">Samburu County</option>
                                                        <option value="Siaya County">Siaya County</option>
                                                        <option value="Taita Taveta County">Taita Taveta County</option>
                                                        <option value="Tana River County">Tana River County</option>
                                                        <option value="Tharaka Nithi County">Tharaka Nithi County</option>
                                                        <option value="Trans Nzoia County">Trans Nzoia County</option>
                                                        <option value="Turkana County">Turkana County</option>
                                                        <option value="Uasin Gishu County">Uasin Gishu County</option>
                                                        <option value="Vihiga County">Vihiga County</option>
                                                        <option value="Wajir County">Wajir County</option>
                                                        <option value="West Pokot County">West Pokot County</option>
                                                    </select></td>

                                            </tr>
                                            <tr class="error1">
                                                <td> Car status</td>
                                                <td><select name="car_status" class="form-control" style="width: 100%;" required>
                                                        <option value="">Select car status</option>
                                                        <option value="Everything cleared">Everything cleared</option>
                                                        <option value="At Mombasa port duty paid">At Mombasa port duty paid</option>
                                                        <option value="At Mombasa port not duty paid">At Mombasa port duty not paid</option>
                                                        <option value="Ready for import">Ready for import</option>

                                                    </select></td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Car for</td>
                                                <td><select name="car_for" class="form-control" style="width: 100%;" required>
                                                        <option value="">Hire|Sale</option>
                                                        <option value="Hire">Hire</option>
                                                        <option value="Sale">Sale</option>
                                                    </select></td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Make</td>
                                                <td><select id="make" name="make" class="form-control" onchange="populate(this.id, 'model')" required>
                                                        <option selected="selected" value="">Select Make</option>
                                                        <optgroup label="New">
                                                            <option value="tuktuk">Tuktuk</option>
                                                            <option value="motobike">Motor Bike</option>
                                                            <option value="tour van">Tour Van</option>
                                                        <optgroup>
                                                        <optgroup label="Popular">
                                                            <option value="Subaru">Subaru</option>
                                                            <option value="Toyota">Toyota</option>
                                                            <option value="Nissan">Nissan</option>
                                                            <option value="Mitsubishi">Mitsubishi</option>
                                                            <option value="Mazda">Mazda</option>
                                                            <option value="Hyundai">Hyundai</option>
                                                            <option value="Honda">Honda</option>
                                                            <option value="Isuzu">Isuzu</option>
                                                            <option value="Volkswagen">Volkswagen</option>
                                                            <option value="Mercedes Benz">Mercedes Benz</option>
                                                        </optgroup>
                                                        <optgroup>
                                                        <optgroup label="Alphabetically">
                                                            <option value="Acmat">Acmat</option>
                                                            <option value="Acura">Acura</option>
                                                            <option value="Adly">Adly</option>
                                                            <option value="Agrimac">Agrimac</option>
                                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                                            <option value="Alibaba">Alibaba</option>
                                                            <option value="AMW">AMW</option>
                                                            <option value="Aprilia">Aprilia</option>
                                                            <option value="Apsonic">Apsonic</option>
                                                            <option value="Asia">Asia</option>
                                                            <option value="Aston Martin">Aston Martin</option>
                                                            <option value="Atlas Copco">Atlas Copco</option>
                                                            <option value="Atul">Atul</option>
                                                            <option value="Audi">Audi</option>
                                                            <option value="BAIC">BAIC</option>
                                                            <option value="Bajaj">Bajaj</option>
                                                            <option value="BAW">BAW</option>
                                                            <option value="Bedford">Bedford</option>
                                                            <option value="BeiBen">BeiBen</option>
                                                            <option value="Beifang Benchi">Beifang Benchi</option>
                                                            <option value="Bell">Bell</option>
                                                            <option value="Benda">Benda</option>
                                                            <option value="Benelli">Benelli</option>
                                                            <option value="Bentley">Bentley</option>
                                                            <option value="Beta">Beta</option>
                                                            <option value="Bilmola">Bilmola</option>
                                                            <option value="BKZ">BKZ</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="Bomag">Bomag</option>
                                                            <option value="Buick">Buick</option>
                                                            <option value="C&C">C&C</option>
                                                            <option value="Cadillac">Cadillac</option>
                                                            <option value="Carltons">Carltons</option>
                                                            <option value="Case IH">Case IH</option>
                                                            <option value="Caterpillar">Caterpillar</option>
                                                            <option value="CEC">CEC</option>
                                                            <option value="CHANGAN">CHANGAN</option>
                                                            <option value="Chery">Chery</option>
                                                            <option value="Chevrolet">Chevrolet</option>
                                                            <option value="Chrysler">Chrysler</option>
                                                            <option value="Citroen">Citroen</option>
                                                            <option value="Claas">Claas</option>
                                                            <option value="Claas Ceres">Claas Ceres</option>
                                                            <option value="CMC Trailer">CMC Trailer</option>
                                                            <option value="Colombo">Colombo</option>
                                                            <option value="CPI">CPI</option>
                                                            <option value="Cygnusx">Cygnusx</option>
                                                            <option value="Daewoo">Daewoo</option>
                                                            <option value="DAF">DAF</option>
                                                            <option value="Dafier">Dafier</option>
                                                            <option value="Daihatsu">Daihatsu</option>
                                                            <option value="Daimler">Daimler</option>
                                                            <option value="Datsun">Datsun</option>
                                                            <option value="Delta">Delta</option>
                                                            <option value="Derbi">Derbi</option>
                                                            <option value="Detank">Detank</option>
                                                            <option value="Dodge">Dodge</option>
                                                            <option value="Dongfeng">Dongfeng</option>
                                                            <option value="Ducati">Ducati</option>
                                                            <option value="Eicher">Eicher</option>
                                                            <option value="Equipment & Machinery">Equipment & Machinery</option>
                                                            <option value="Escorts">Escorts</option>
                                                            <option value="FAW">FAW</option>
                                                            <option value="Feil">Feil</option>
                                                            <option value="Ferrari">Ferrari</option>
                                                            <option value="Fiat">Fiat</option>
                                                            <option value="Force">Force</option>
                                                            <option value="Ford">Ford</option>
                                                            <option value="Forland">Forland</option>
                                                            <option value="Foton">Foton</option>
                                                            <option value="Freightliner">Freightliner</option>
                                                            <option value="FUSO">FUSO</option>
                                                            <option value="Geely">Geely</option>
                                                            <option value="Ginaf">Ginaf</option>
                                                            <option value="GMC">GMC</option>
                                                            <option value="Gonow">Gonow</option>
                                                            <option value="Great Wall">Great Wall</option>
                                                            <option value="GWM">GWM</option>
                                                            <option value="Haojiang">Haojiang</option>
                                                            <option value="Haojin">Haojin</option>
                                                            <option value="Haojue">Haojue</option>
                                                            <option value="Harley-Davidson">Harley-Davidson</option>
                                                            <option value="Hero">Hero</option>
                                                            <option value="Higer">Higer</option>
                                                            <option value="Hino">Hino</option>
                                                            <option value="Hitachi">Hitachi</option>
                                                            <option value="Holden">Holden</option>
                                                            <option value="HOWO">HOWO</option>
                                                            <option value="Hummer">Hummer</option>
                                                            <option value="Husaberg">Husaberg</option>
                                                            <option value="Husqvarna">Husqvarna</option>
                                                            <option value="Infiniti">Infiniti</option>
                                                            <option value="Infinity">Infinity</option>
                                                            <option value="Innocenti">Innocenti</option>
                                                            <option value="Italjet">Italjet</option>
                                                            <option value="IVECO">IVECO</option>
                                                            <option value="IVM">IVM</option>
                                                            <option value="JAC">JAC</option>
                                                            <option value="Jaguar">Jaguar</option>
                                                            <option value="JCB">JCB</option>
                                                            <option value="Jeep">Jeep</option>
                                                            <option value="Jialing">Jialing</option>
                                                            <option value="Jin Bei">Jin Bei</option>
                                                            <option value="Jincheng">Jincheng</option>
                                                            <option value="JMC">JMC</option>
                                                            <option value="John Deere">John Deere</option>
                                                            <option value="Joylong">Joylong</option>
                                                            <option value="Kawasaki">Kawasaki</option>
                                                            <option value="Keeway">Keeway</option>
                                                            <option value="Kia">Kia</option>
                                                            <option value="Kioti">Kioti</option>
                                                            <option value="Komatsu">Komatsu</option>
                                                            <option value="Koshin">Koshin</option>
                                                            <option value="KTM">KTM</option>
                                                            <option value="Kymco">Kymco</option>
                                                            <option value="Lada">Lada</option>
                                                            <option value="Lamborghini">Lamborghini</option>
                                                            <option value="Lancia">Lancia</option>
                                                            <option value="Land Rover">Land Rover</option>
                                                            <option value="Landini">Landini</option>
                                                            <option value="LDV">LDV</option>
                                                            <option value="Lexus">Lexus</option>
                                                            <option value="Leyland">Leyland</option>
                                                            <option value="Lifan">Lifan</option>
                                                            <option value="Lincoln">Lincoln</option>
                                                            <option value="Lotus">Lotus</option>
                                                            <option value="Mack">Mack</option>
                                                            <option value="Mahindra">Mahindra</option>
                                                            <option value="Malguti">Malguti</option>
                                                            <option value="Man">Man</option>
                                                            <option value="Maserati">Maserati</option>
                                                            <option value="Massey-Ferguson">Massey-Ferguson</option>
                                                            <option value="Matador">Matador</option>
                                                            <option value="MBK">MBK</option>
                                                            <option value="Megelli">Megelli</option>
                                                            <option value="Mercury">Mercury</option>
                                                            <option value="Messy">Messy</option>
                                                            <option value="MG">MG</option>
                                                            <option value="Mini">Mini</option>
                                                            <option value="Mitsuoka">Mitsuoka</option>
                                                            <option value="Mobius">Mobius</option>
                                                            <option value="Morris">Morris</option>
                                                            <option value="Motrac">Motrac</option>
                                                            <option value="New Holland">New Holland</option>
                                                            <option value="New Way">New Way</option>
                                                            <option value="Nordic">Nordic</option>
                                                            <option value="Old Stone Tractor Co">Old Stone Tractor Co</option>
                                                            <option value="Oldsmobile">Oldsmobile</option>
                                                            <option value="Opel">Opel</option>
                                                            <option value="Perodua">Perodua</option>
                                                            <option value="Peugeot">Peugeot</option>
                                                            <option value="PGO">PGO</option>
                                                            <option value="Piaggio">Piaggio</option>
                                                            <option value="Pinzgauer">Pinzgauer</option>
                                                            <option value="Polaris">Polaris</option>
                                                            <option value="Pontiac">Pontiac</option>
                                                            <option value="Porsche">Porsche</option>
                                                            <option value="Powerline">Powerline</option>
                                                            <option value="Pramac">Pramac</option>
                                                            <option value="Proton">Proton</option>
                                                            <option value="QW Moto">QW Moto</option>
                                                            <option value="Renault">Renault</option>
                                                            <option value="Rolls-Royce">Rolls-Royce</option>
                                                            <option value="Rover">Rover</option>
                                                            <option value="Royal">Royal</option>
                                                            <option value="Saab">Saab</option>
                                                            <option value="Saipa">Saipa</option>
                                                            <option value="Same">Same</option>
                                                            <option value="Samsung">Samsung</option>
                                                            <option value="Sany">Sany</option>
                                                            <option value="Saturn">Saturn</option>
                                                            <option value="Scania">Scania</option>
                                                            <option value="Seat">Seat</option>
                                                            <option value="Sefia">Sefia</option>
                                                            <option value="Senke">Senke</option>
                                                            <option value="Shacman">Shacman</option>
                                                            <option value="Shaktiman">Shaktiman</option>
                                                            <option value="Shineray">Shineray</option>
                                                            <option value="Simba">Simba</option>
                                                            <option value="Sinotruk">Sinotruk</option>
                                                            <option value="Skoda">Skoda</option>
                                                            <option value="SkyGo">SkyGo</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="Smart">Smart</option>
                                                            <option value="Solis">Solis</option>
                                                            <option value="Sonalika">Sonalika</option>
                                                            <option value="Soosan">Soosan</option>
                                                            <option value="Ssang Yong">Ssang Yong</option>
                                                            <option value="Stara">Stara</option>
                                                            <option value="Steyr">Steyr</option>
                                                            <option value="Sumitomo">Sumitomo</option>
                                                            <option value="SUV">SUV</option>
                                                            <option value="Suzuki">Suzuki</option>
                                                            <option value="Swaraj">Swaraj</option>
                                                            <option value="Sym">Sym</option>
                                                            <option value="T-KING">T-KING</option>
                                                            <option value="Tafe">Tafe</option>
                                                            <option value="Tamashii">Tamashii</option>
                                                            <option value="Tata">Tata</option>
                                                            <option value="Tatu Marchesan">Tatu Marchesan</option>
                                                            <option value="TCM">TCM</option>
                                                            <option value="Terex">Terex</option>
                                                            <option value="Thunder">Thunder</option>
                                                            <option value="Trail King">Trail King</option>
                                                            <option value="Trailer">Trailer</option>
                                                            <option value="Triumph">Triumph</option>
                                                            <option value="TVS">TVS</option>
                                                            <option value="Twaites">Twaites</option>
                                                            <option value="Vauxhall">Vauxhall</option>
                                                            <option value="Vector">Vector</option>
                                                            <option value="Venturi">Venturi</option>
                                                            <option value="VersityXC">VersityXC</option>
                                                            <option value="Vibromax">Vibromax</option>
                                                            <option value="Volvo">Volvo</option>
                                                            <option value="XGMA">XGMA</option>
                                                            <option value="Xiamen">Xiamen</option>
                                                            <option value="Yamaha">Yamaha</option>
                                                            <option value="Yutong">Yutong</option>
                                                            <option value="Zonda">Zonda</option>
                                                            <option value="Zontes">Zontes</option>
                                                            <option value="Zoomlion">Zoomlion</option>
                                                            <option value="ZX Auto">ZX Auto</option>

                                                        </optgroup>
                                                    </select></td>
                                            </tr>

                                            <tr class="error1">
                                                <td>Model</td>
                                                <td><select id="model" name="model" class="form-control"  required>
                                                        <option selected="selected" value="">Select Model</option>
                                                    </select></td>

                                            </tr>



                                            <tr class="error1">
                                                <td>Actual Amount</td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Actual Amount in KES" name="actual_amount"  required><br/>
                                                    <input type="checkbox" value="negotiable" name="negotiable">&nbsp;Negotiable 
                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Description</td>
                                                <td>          
                                                    <textarea name="description" style="width: 100%; height: 100px;" placeholder="Enter your description here... Put as much details as possible." required></textarea>
                                                </td></tr>
                                            </tr>
                                            <tr class="error1">
                                                <td>Choose the car profile photo to upload</td>
                                                <td>   
                                                    <article>
                                                        <?php //echo $msg; ?>

                                                        <div style="width: 200px; margin: 0 auto;">

                                                            <fieldset>
                                                                <input class="files" name="user_files[]" type="file" required><span><a href="javascript:void(0);" class="add" ><br/></a></span>
                                                                <div class="contents"></div>
                                                                <div class="height10"></div>
                                                            </fieldset>
                                                        </div>
                                                    </article>
                                                    <!--input name="file_upload" type="file" G
                                             The originality of the
                                             Warranty 10 years 
                                             --/><br />
                                                                
                                                </td></tr> 
                                                                
                                                                         <tr class="error1"><td colspan="2"><table class="table  table-bordered table-hover" >
                                                           <tbody> <tr class="error1">
                                                                  </td><center><strong>Overview</strong>                                
                                                    <!--button type="submit" name="btnsubmit"  id="properties" class="btn btn-info">Submit Property</button--></center></td>


                                            </tr>
                                    </table></td></tr> </div>



                            <tr class="error1"><td colspan="2"><table class="table  table-bordered table-hover" >
                                        <tbody> 
                                            <tr class="error1">
                                                <td>Mileage</td>
                                                <td>
                                                    <input type="number" placeholder="Enter the Mileage" name="mileage"  >

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Condition</td>
                                                <td>
                                                    <select name="condition_type" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Condition</option>
                                                        <option value="New">New</option>
                                                        <option value="Locally Used">Locally Used</option>
                                                        <option value="Foreign Used">Foreign Used</option>
                                                    </select>


                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Body Type</td>
                                                <td>
                                                    <select name="body_type" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Body Type</option>
                                                        <option value="SUV Sport utility vehicle">SUV-(Sport utility vehicle)</option>
                                                        <option value="Sedan">Sedan</option>
                                                        <option value="Van">Van</option>
                                                        <option value="Truck">Truck</option>
                                                        <option value="Coupe Compact">Coupe/Compact</option>
                                                        <option value="Wagon">Wagon</option>
                                                        <option value="Convertible">Convertible</option>
                                                        <option value="Sports Car">Sports Car</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Crossover">Crossover</option>
                                                        <option value="Luxury Car">Luxury Car</option>
                                                        <option value="Hybrid Electric">Hybrid/Electric</option>
                                                        <option value="Hatchback">Hatchback</option>
                                                    </select>


                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Drive Type</td>
                                                <td>
                                                    <select name="drive_type" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Drive Type</option>
                                                        <option value="Rear Wheel">Rear Whee</option>
                                                        <option value="Front Wheel">Front Wheel</option>
                                                        <option value="All Wheel Drive">All-Wheel Drive</option>
                                                    </select>


                                                </td>

                                            </tr>
                                            <tr class="error1">
                                                <td>Car Color</td>
                                                <td>
                                                    <input type="text" placeholder="Enter the Car Color" name="car_color" style="width: 100%;">


                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Fuel</td>
                                                <td>
                                                    <select name="fuel" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Fuel</option>
                                                        <option value="Petrol">Petrol</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Super">Hybrid</option>
                                                    </select>

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Drive Setup</td>
                                                <td>
                                                    <select name="drive_setup" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Fuel</option>
                                                        <option value="Righthand Drive">Righthand Drive</option>
                                                        <option value="Lefthand Drive">Lefthand Drive</option>

                                                    </select>


                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Transmission</td>
                                                <td>
                                                    <select name="transmission" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Transmission</option>
                                                        <option value="Automatic">Automatic</option>
                                                        <option value="Manual">Manual</option>

                                                    </select>

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Duty Type</td>
                                                <td>
                                                    <select name="duty_type" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Duty Type</option>
                                                        <option value="Duty Paid">Duty Paid</option>
                                                        <option value="Duty Not Paid">Duty Not Paid</option>

                                                    </select>


                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Interior Type</td>
                                                <td>
                                                    <select name="interior" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Interior Type</option>
                                                        <option value="Cloth">Cloth</option>
                                                        <option value="Leather">Leather</option>

                                                    </select>

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Door Count</td>
                                                <td>
                                                    <select name="door_count" class="form-control" style="width: 100%;" >
                                                        <option value="">Select Door Count</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>

                                                    </select>

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Engine Size</td>
                                                <td>
                                                    <input type="text" placeholder="Enter the Engine Size" name="engine_size"  >

                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Year of manufacture</td>
                                                <td>

                                                    <select id="year" name="year" class="form-control" >
                                                        <option value="">Select Year</option> 
                                                        <script>
                                                            var myDate = new Date();
                                                            var year = myDate.getFullYear();
                                                            for (var i = 1900; i < year + 1; i++) {
                                                                document.write('<option value="' + i + '">' + i + '</option>');
                                                            }
                                                        </script>    


                                                    </select>
                                                </td>

                                            </tr>

                                            <tr class="error1">
                                                <td>Turbo</td>
                                                <td>
                                                    <select name="turbo" class="form-control" style="width: 100%;" >
                                                        <option value="">Select</option> 
                                                        <option value="With Turbo">With Turbo</option>
                                                        <option value="Without Turbo">Without Turbo</option>

                                                    </select>
                                                </td>
                                            </tr>


                                    </table></td></tr> 



                            <tr class="error1"><td colspan="2"><table class="table  table-bordered table-hover" >
                                        <tbody> <tr class="error1">
                                        </td><center><strong>Additional features </strong>                                
                                            <!--button type="submit" name="btnsubmit"  id="properties" class="btn btn-info">Submit Property</button--></center></td>


                            </tr>
                    </table></td></tr>  



                    <tr class="error1"><td colspan="2"><table class="table  table-bordered table-hover" >
                                <tbody> <tr class="error1">
                                        </td>

                                <table class="table  table-bordered table-hover" >
                                    <tbody>




                                        <tr class="info"><td>            

                                                <input type="checkbox" value="Trade in allow" name="trade_in">&nbsp;Trade in allowed</td>
                                            <td>    <input type="checkbox" value="Air Conditioning" name="air_conditioning">&nbsp;Air Conditioning</td>
                                            <td>  <input type="checkbox" value="Airbags" name="airbags">&nbsp;Airbags</td>
                                            <td><input type="checkbox" value="Alloy Wheels" name="alloy_wheels">&nbsp;Alloy Wheels</td></tr>

                                        <tr class="info"><td>   <input type="checkbox" value="AM/FM Radio" name="radio_fm_am">&nbsp; AM/FM Radio</td> 
                                            <td> <input type="checkbox" value="Anti-Lock Brakes" name="anti_lock_brakes"> &nbsp;Anti-Lock Brakes</td> 
                                            <td> <input type="checkbox" value="Armrests" name="armrests">&nbsp;Armrests</td> 

                                            <td> <input type="checkbox" value="CD Player" name="CD_layer">&nbsp;CD Player</td></tr> 


                                        <tr class="info"><td><input type="checkbox" value="Electric Mirrors" name="electric_mirrors">&nbsp;Electric Mirrors</td>
                                            <td><input type="checkbox" value="Electric Windows" name="electric_windows">&nbsp;Electric Windows</td>
                                            <td><input type="checkbox" value="Fog Lights" name="fog_lights">&nbsp;Fog Lights</td>
                                            <td><input type="checkbox" value="Front Fog Lamps" name="front_fog_lamps">&nbsp;Front Fog Lamps</td></tr>

                                        <tr class="info"><td><input type="checkbox" value="Power Steering" name="power_steering">&nbsp;Power Steering</td>  
                                            <td><input type="checkbox" value="Spoilers" name="spoilers">&nbsp;Spoilers </td> 


                                            <td><input type="checkbox" value="Halogen headlights" name="halogen_headlights">&nbsp;Halogen headlights</td>
                                            <td><input type="checkbox" value="Xenon headlights" name="xenon_headlights">&nbsp;Xenon headlights</td>
                                        </tr>

                                        <tr class="info">
                                            <td><input type="checkbox" value="EBD" name="EBD">&nbsp;EBD</td>
                                            <td><input type="checkbox" value="ESP" name="ESP">&nbsp;ESP </td>
                                            <td><input type="checkbox" value="ABS" name="ABS">&nbsp;ABS </td>
                                            <td><input type="checkbox" value="ABD" name="ABD">&nbsp;ABD </td>

                                        </tr>

                                        <tr class="info">
                                            <td><input type="checkbox" value="Immobilizer" name="immobilizer">&nbsp;Immobilizer</td> 
                                            <td><input type="checkbox" value="Servotab" name="servotab">&nbsp;Servotab </td>            
                                            <td><input type="checkbox" value="Signaling" name="signaling">&nbsp;Signaling </td>
                                            <td><input type="checkbox" value="Central locking " name="central_locking">&nbsp;Central locking </td>
                                        </tr>

                                        <tr class="info"><td><input type="checkbox" value="Service book" name="service_book">&nbsp;Service book </td>

                                            <td ><input type="checkbox" value="On-board computer" name="onboard_computer">&nbsp;On-board computer </td>
                                            <td><input type="checkbox" value="Oven" name="oven">&nbsp;Oven </td>
                                            <td ><input type="checkbox" value="Light sensor" name="light_sensor">&nbsp;Light sensor </td></tr>

                                        <tr class="info"><td><input type="checkbox" value="Climate control" name="climate_control">&nbsp;Climate control </td>
                                            <td><input type="checkbox" value="Leather interior" name="leather_interior">&nbsp;Leather interior </td>
                                            <td><input type="checkbox" value="Tuning" name="tuning">&nbsp;Tuning </td>
                                            <td><input type="checkbox" value="Cruise control" name="cruise_control">&nbsp;Cruise control </td> </tr>


                                        <tr class="info"><td><input type="checkbox" value="Luke" name="luke">&nbsp;Luke </td>
                                            <td><input type="checkbox" value="Multiwheel" name="multiwheel">&nbsp;Multiwheel </td>
                                            <td><input type="checkbox" value="Headlight washer" name="headlight_washer">&nbsp;Headlight washer </td>
                                            <td><input type="checkbox" value="Parktronic" name="parktronic">&nbsp;Parktronic </td> </tr>

                                        <tr class="info"><td><input type="checkbox" value="Heated mirrors" name="heated_mirrors">&nbsp;Heated mirrors </td>
                                            <td><input type="checkbox" value="Heated seats" name="heated_seats">&nbsp;Heated seats </td>
                                            <td><input type="checkbox" value="Rain sensor" name="rain_sensor">&nbsp;Rain sensor </td>
                                            <td><input type="checkbox" value="Power steering" name="power_steering">&nbsp;Power steering </td> </tr>

                                        <tr class="info"><td><input type="checkbox" value="Power windows" name="power_windows">&nbsp;Power windows </td>
                                            <td><input type="checkbox" value="R-camera" name="r_camera">&nbsp;R-camera </td>
                                            <td><input type="checkbox" value="Acoustics" name="acoustics">&nbsp;Acoustics </td>
                                            <td><input type="checkbox" value="Subwoofer" name="subwoofer">&nbsp;Subwoofer </td> </tr>

                                        <tr class="info"><td><input type="checkbox" value="Tape recorder" name="tape_recorder">&nbsp;Tape recorder </td>
                                            <td><input type="checkbox" value="DVD" name="DVD">&nbsp;DVD</td>
                                            <td><input type="checkbox" value="MP3" name="MP3">&nbsp;MP3 </td>
                                            <td><input type="checkbox" value="GPS" name="GPS">&nbsp;GPS </td> </tr>


                                        <tr class="info">
                                            <td><input type="checkbox" value="Toning" name="toning">&nbsp;Toning </td>
                                            <td ><input type="checkbox" value="Hitch" name="hitch">&nbsp;Hitch </td> 
                                            <td colspan="2"></td>	</tr>					
                                        </td>



                                        </form>
                                        </tr>
                                </table></td></tr> 



                    <tr><td colspan="2"><table class="table  table-bordered table-hover" >
                                <tbody> <tr class="success">
                                        <td><center><h4>
                                        <div><input type="submit" class="btn btn-info" name="sub2" value="Submit Car Advert" /> </div>
                                        <!--input type="submit" name="btnsubmit"   class="btn btn-info" value="Submit Car" -->                                   
                                        <!--button type="submit" name="btnsubmit"  
                                        
                                        
                                        
                                        id="properties" class="btn btn-info">Submit Property</button--></h4></center></td>


                    </tr>
                    </table></td></tr>      


                    </tbody></table> 

            </form>
            </tr></table>

        </div></div><!--p --/col-lg-8 -->


    <!-- p-- SIDEBAR -->
    <div class="col-lg-4">
        <h4><img src="assets/img/cars/car.png" alt="" id="imgbig" width="40px" height="40px"><span style="color: #ffffff; font-size: 14px;">&nbsp;Search for your favorite Car</h4>
            <?php
            include('display_search.php');
            ?> 	 		



<!--h4><img src="assets/img/house/vehicle.png" alt="" id="imgbig" width="40px" height="40px"><span style="color: #ffffff; font-size: 14px;">&nbsp;Vehicles</h4>
<div class="hline"></div>
        <div class="spacing"></di--><br/>
    </div>
</div>					
</div>	

<?php
//include('footeradmin.php');
?>
<?php
include('footer.php');
?>