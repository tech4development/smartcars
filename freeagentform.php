<style>
    input[type="text"],input[type="tel"],input[type="email"],textArea, select{
        border: 1px solid #ddd !important;
        border-radius: inherit;
    }
    label{
        left: 1rem !important;
        top: 1.5rem !important;
    }
    .row{
        margin-bottom: 0px;
    }
</style>
<script src="js/models_make.js"></script>
<div class="row" style="margin-top: 20px;   width: 90%;">
    <div class="col s12 m8" >
        <div class="row blue darken-1"><h4 class="white-text">Advertise your car(s)</h4></div>
        <form class="col s12" style="border: 1px solid #ddd; margin-top: 20px; margin-bottom: 20px;" action="postguru.php" method="post">
            <div class="row">
                <div class="input-field col s12 m6">
                    <input class="browser-default" id="first_name" type="text" class="validate" name="fname">
                    <label for="fname">First Name</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="last_name" type="text" class="validate" name="lname">
                    <label for="lname">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input class="browser-default" id="first_name" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="last_name" type="tel" class="validate" name="mobile_number">
                    <label for="mobile_number">Mobile Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="country">
                        <option selected>Country</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Tanzania">Tanzania</option>
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="county">
                        <option value="" disabled selected>County</option>
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

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m12">
                    <input class="browser-default" id="first_name" type="text" class="validate" name="title" placeholder="e.g. Toyota probox for sale">
                    <label for="title">Advert Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="car_status">
                        <option value="">Select car status</option>
                        <option value="Everything cleared">Everything cleared</option>
                        <option value="At Mombasa port duty paid">At Mombasa port duty paid</option>
                        <option value="At Mombasa port not duty paid">At Mombasa port duty not paid</option>
                        <option value="Ready for import">Ready for import</option>

                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="car_for">
                        <option selected>Car For</option>

                        <option value="Hire">Hire</option>
                        <option value="Sale">Sale</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select id="make" name="make" onchange="populate(this.id, 'model')">
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
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="model" id="model">
                        <option selected="selected" value="">Select Model</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m9">
                    <input class="browser-default" id="first_name" type="text" class="validate" name="actual_amount">
                    <label for="actual_amount">Actual Amount</label>
                </div>
                <div class="file-field input-field col s12 m3">
                    <input type="checkbox" id="negotiable" name="negotiable"/>
                    <label for="negotiable">Price is Negotiable</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea" data-length="120" name="description" style="border-radius: 0px;"></textarea>
                    <label for="description">Car Description</label>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field col s12 m12">
                    <div class="btn" style="    float: right;
                         height: 3rem;
                         line-height: 3rem;
                         margin-top: 14px;">
                        <span>Photo</span>
                        <input type="file" name="photo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <input class="browser-default" id="first_name" type="text" class="validate" name="mileage">
                    <label for="mileage">Mileage</label>
                </div>
                <div class="input-field col s12 m6">
                    <select name="condition_type">
                        <option value="">Select Condition</option>
                        <option value="New">New</option>
                        <option value="Locally Used">Locally Used</option>
                        <option value="Foreign Used">Foreign Used</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="body_type">
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
                </div>
                <div class="input-field col s12 m6">
                    <select name="drive_type">
                        <option value="">Select Drive Type</option>
                        <option value="Rear Wheel">Rear Whee</option>
                        <option value="Front Wheel">Front Wheel</option>
                        <option value="All Wheel Drive">All-Wheel Drive</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="door_count">
                        <option value="">Select Door Count</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="fuel">
                        <option value="">Select Fuel</option>
                        <option value="Petrol">Petrol</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Super">Hybrid</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="drive_setup">
                        <option value="">Select Fuel</option>
                        <option value="Righthand Drive">Righthand Drive</option>
                        <option value="Lefthand Drive">Lefthand Drive</option>
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="transmission">
                        <option value="">Select Transmission</option>
                        <option value="Automatic">Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="duty_type">
                        <option value="">Select Duty Type</option>
                        <option value="Duty Paid">Duty Paid</option>
                        <option value="Duty Not Paid">Duty Not Paid</option>
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="interior">
                        <option value="">Select Interior Type</option>
                        <option value="Cloth">Cloth</option>
                        <option value="Leather">Leather</option>
                    </select>
                </div>
            </div>
            <div class="row">

                <div class="input-field col s12 m6">
                    <input class="browser-default" id="car_color" type="text" class="validate" name="car_color">
                    <label for="car_color">Car Color</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="engine_size" type="text" class="validate" name="engine_size">
                    <label for="engine_size">Engine Size</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6">
                    <select name="year">
                        <option value="">Select Year</option> 
                        <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for (var i = 1900; i < year + 1; i++) {
                                document.write('<option value="' + i + '">' + i + '</option>');
                            }
                        </script>   
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <select name="turbo">
                        <option value="">Select</option> 
                        <option value="With Turbo">With Turbo</option>
                        <option value="Without Turbo">Without Turbo</option>
                    </select>
                </div>
            </div>
            <div class="row blue darken-1" style="margin-top: 10px;"><h4 class="white-text">Additional Features</h4></div>
            <div class="row">
                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test1" />
                    <label for="test1">Trade in allowed</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test2" />
                    <label for="test2">Air Conditioning</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test3" />
                    <label for="test3">Airbags</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test4" />
                    <label for="test4">Alloy Wheels</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test5" />
                    <label for="test5">AM/FM Radio</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test6" />
                    <label for="test6">Anti-Lock Brakes</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test7" />
                    <label for="test7">Armrests</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test8" />
                    <label for="test8">CD Player</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test9" />
                    <label for="test9">Electric Mirrors</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test10" />
                    <label for="test10">Electric Windows</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test11" />
                    <label for="test11">Fog Lights</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test12" />
                    <label for="test12">Front Fog Lamps</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test13" />
                    <label for="test13">Power Steering</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test14" />
                    <label for="test14">Spoilers</label>
                </div>

                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test16" />
                    <label for="test16">Xenon headlights</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test17" />
                    <label for="test17">EBD</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test18" />
                    <label for="test18">ESP</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test19" />
                    <label for="test19">ABS</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test20" />
                    <label for="test20">ABD</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test21" />
                    <label for="test21">Immobilizer</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test22" />
                    <label for="test22">Servotab</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test23" />
                    <label for="test23">Signaling</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test24" />
                    <label for="test24">Central locking</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test25" />
                    <label for="test25">Service book</label>
                </div>

                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test27" />
                    <label for="test27">Oven</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test28" />
                    <label for="test28">Light sensor</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test29" />
                    <label for="test29">Climate control</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test30" />
                    <label for="test30">Leather interior</label>
                </div>

                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test32" />
                    <label for="test32">Tuning</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test33" />
                    <label for="test33">Cruise control</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test34" />
                    <label for="test34">Luke</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test35" />
                    <label for="test35">Multiwheel</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test36" />
                    <label for="test36">Headlight washer</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test37" />
                    <label for="test37">Parktronic</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test38" />
                    <label for="test38">Heated mirrors</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test39" />
                    <label for="test39">Heated seats</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test40" />
                    <label for="test40">Rain sensor</label>
                </div>

                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test42" />
                    <label for="test42">Power windows</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test43" />
                    <label for="test43"> R-camera</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test44" />
                    <label for="test44">Acoustics</label>
                </div>

                <div class="input-field col s6 m3" >
                    <input type="checkbox" value="" id="test45" />
                    <label for="test45">Subwoofer</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test46" />
                    <label for="test46">Tape recorder</label>
                </div>

                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test48" />
                    <label for="test48">DVD</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test47" />
                    <label for="test47">MP3</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test49" />
                    <label for="test49">GPS</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test50" />
                    <label for="test50">Toning</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test51" />
                    <label for="test51">Halogen headlights</label>
                </div>
                <div class="input-field col s6 m3">
                    <input type="checkbox" value="" id="test52" />
                    <label for="test52">On-board computer</label>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;margin-top: 20px;">
                <div class="input-field col s12 m6" style="float: right;">
                    <button class="btn waves-effect waves-light" type="submit" style="width:100%;">Submit Car Advert
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

        </form>
    </div>
    <div class="col s12 m4 ">
        <div class="row blue darken-1"><h4 class="white-text"> Search for your favorite Car</h4></div>

    </div>

</div>