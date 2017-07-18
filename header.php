<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Smartcars</title>

        <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="icon" type="image/gif" href="images/favicon.png" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--    script for advertisers logo slider-->
        <link href="css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
        <script src="js/thumbnail-slider.js" type="text/javascript"></script>
        <!--    script for advertisers logo slider-->

        <script>
            jQuery(document).ready(function () {

                jQuery('.carousel[data-type="multi"] .item').each(function () {
                    var next = jQuery(this).next();
                    if (!next.length) {
                        next = jQuery(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo(jQuery(this));

                    for (var i = 0; i < 2; i++) {
                        next = next.next();
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
                background-color: #fff ;
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
                height: 210px;
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
        
        


<script>
function populate(id1,id2){
	var id1 = document.getElementById(id1);
	var id2 = document.getElementById(id2);
	id2.innerHTML = "";
	if(id1.value == "Subaru"){
		var optionArray = ["|","1.8|1.8","1600|1600","360|360","1400|1400","alfa|Alfa","baja|Baja","bRZ|Brz","dex|Dex","dl|Dl","exiga|Exiga","ffi|Ffi","forester|Forester","impreza|Impreza","justy|Justy","legacy|Legacy","leone|Leone","liberty|Liberty","mini|Mini","outback|Outback","pleo|Pleo","r2|R2","rex|Rex","samba|Samba","stella|Stella","sTX|STX","sVX|SVX","traviq|Traviq","xV|XV","tribeca|Tribeca","vivio|Vivio"]
	} else if(id1.value == "Toyota"){
		var optionArray = ["|","1000|1000","4-Runner|4-Runner","86|86","allex|Allex","allion|Allion","alphard|Alphard","altezza|Altezza","aristo|Aristo","auris|Auris","avalon|Avalon","avanza|Avanza","avensis|Avensis","axio|Axio","axion|Axion","aygo|Aygo","bB|BB","belta|Belta","blade|Blade","blizzard|Blizzard","brevis|Brevis","caetano|Caetano","caldina|Caldina","cami|Cami","camry|Camry","carib|Carib","carina|Carina","celina|Celina","celsior|Celsior","chaser|Chaser","coaster|Coaster","condor|Condor","conquest|Conquest","corolla|Corolla","corona|Corona","corsa|Corsa","cressida|Cressida","cresta|Cresta","crown|Crown","cynos|Cynos","denso|Denso","duet|Duet","dyna|Dyna","echo|Echo","es|Es","estima|Estima","etios|Etios","FCHV|FCHV","fielder|Fielder","FJ Cruiser|FJ Cruiser","FK|FK","fortuner|Fortuner","fun cargo|Fun cargo","fxs|FXS","gaia|Gaia","grand hiace|Grand hiace","granvia|Granvia","GT1|GT1","harrier|Harrier","hiace|Hiace","highlander|Highlander","hillux|Hillux","hino|Hino","HMV|HMV","ipsum|Ipsum","iQ|IQ","isis|Isis","ist|IST","jobsun|Jobsun","kluger|Kluger","land cruiser|Land cruiser","land cruiser prado|Land cruiser prado","levin|Levin","lexcen|Lexcen","lite-Ace|Lite-Ace","marino|Marino","mark II|Mark II","mark II blit|Mark II blit","mark X|Mark X","master|Master","matrix|Matrix","mr-s|MR-S","mr2|MR2","nadia|Nadia","noah|Noah","opa|Opa","paseo|Paseo","passo|Passo","picnic|Picnic","platz|Platz","pod|Pod","porte|Porte","premio|Premio","previa|Previa","prius|Prius","probox|Probox","progress|Progress","pulica|Pulica","quantum|Quantum","ractis|Ractis","raum|Raum","rav4|Rav4","regius|Regius","retro|Retro","rsc|Rsc","rumion|Rumion","run-x|Run-X","rush|Rush","sa|Sa","scion|Scion","sequoia|Sequoia","sera|Sera","sienna|Sienna","sienta|Sienta","soarer|Soarer","solara|Solara","soluna|Soluna","spacio|Spacio","sparky|Sparky","sprinter|Sprinter","stallion|Stallion","starlet|Starlet","succeed|Succeed","supra|Supra","surf|Surf","t100|T100","tacoma|Tacoma","tazz|Tazz","tercel|Tercel","terrier|Terrier","townace|Townace","toyoace|Toyoace","trd|Trd","tundra|Tundra","vanguard|Vanguard","vellfire|Vellfire","venture|Venture","venza|Venza","verossa|Verossa","verso|Verso","vios|Vios","vista|Vista","vitz|Vitz","voltz|Voltz","voxy|Voxy","will|Will","windom|Windom","wish|Wish","xyr|Xyr","yaris|Yaris"];
	} else if(id1.value == "Nissan"){
		var optionArray = ["|","100|100","1400|1400","200sx|200SX","240sx|240SX","260z|260Z","300zx|300ZX","350z|350Z","370z|370Z","advan|Advan","almera|Almera","almera tino|Almera Tino","altima|Altima","alto|Alto","armada|Armada","atlas|Atlas","avenir|Avenir","basara|Basara","bluebird|Bluebird","cabstar|Cabstar","caravan|Caravan","carina|Carina","cedric|Cedric","cefiro|Cefiro","cherry|Cherry","cima|Cima","civilian|Civilian","clipper|Clipper","commercial|Commercial","condor|Condor","crew|Crew","cube|Cube","datsun|Datsun","doublecab|DoubleCab","dualis|Dualis","e20|E20","elgrand|Elgrand","expert|Expert","fairlady|Fairlady","fb14|FB14","fb15|FB15","frontier|Frontier","fuga|Fuga","fusion|Fusion","gloria|Gloria","grand|Grand","gt-r|GT-R","hardbody|Hardbody","hypermini|HyperMini","ideo|Ideo","interstar|Interstar","juke|juke","kix|Kix","lafesta|Lafesta","laurel|Laurel","leaf|leaf","leopard|Leopard","liberty|Liberty","livina|Livina","march|March","maxima|Maxima","micra|Micra","moco|Moco","murano|Murano","navara|Navara","note|Note","np200|NP200","np300|NP300","nv200|NV200","pathfinder|Pathfinder","patrol|Patrol","pick-up|Pick-Up","pino|Pino","pintara|Pintara","platina|Platina","prairie|Prairie","presage|Presage","presea|Presea","president|President","primastar|Primastar","primera|Primera","pulsar|Pulsar","qashqai|Qashqai","quest|Quest","rasheen|Rasheen","rogue|Rogue","sahara|Sahara","santana|Santana","sentra|Sentra","serena|Serena","shark|Shark","silvia|Silvia","skyline|Skyline","stagea|Stagea","stanza|Stanza","sunny|Sunny","sylphy|Sylphy","teana|Teana","terrano|Terrano","tiida|Tiida","titan|Titan","trailrunner|Trailrunner","ua-qg|UA-QG","ud|UD","urvan|Urvan","vanette|Vanette","versa|Versa","violet|Violet","wingroad|Wingroad","x-trail|X-Trail","xterra|Xterra","z20|Z20"];
	}
	 else if(id1.value == "Mitsubishi"){
		var optionArray = ["|","3000|3000","airtrek|Airtrek","asx|ASX","attrage|Attrage","canter|Canter","carisma|Carisma","celeste|Celeste","challenger|Challenger","chariot|Chariot","colt|Colt","debonair|Debonair","delica|Delica","deula|Deula","diamante|Diamante","dingo|Dingo","dion|Dion","dyna truck|Dyna Truck","eclipse|Eclipse","ek|EK","endeavor|Endeavor","fh|FH","fighter|Fighter","fto|FTO","fuso|Fuso","fuso fighter|Fuso Fighter","galant|Galant","grandis|Grandis","gto|GTO","iq|iQ","jeep|Jeep","l200|L200","l300|L300","l400|L400","lancer / cedia|Lancer / Cedia","lancer evo|Lancer Evo","lancer evo iv|Lancer Evo IV","legnam|Legnam","magna|Magna","minica|Minica","minicab|Minicab","minicab truck|Minicab Truck","mirage|Mirage","montero|Montero","montero sport|Montero Sport","outlander|Outlander","pajero|Pajero","pajero io|Pajero IO","pajero mini|Pajero Mini","pajero sport|Pajero Sport","raider|Raider","rosa|Rosa","rpm|RPM","rvr|RVR","sapporo|Sapporo","shakti mt180d|Shakti MT180D","shogun|Shogun","sigma|Sigma","spacerunner|SpaceRunner","spacestar|Spacestar","spacewagon|Spacewagon","spyder|Spyder","stepwagon|stepwagon","strada|Strada","super great|Super Great","triton|Triton","verada|Verada","warrior|Warrior"];
	}else if(id1.value == "Mazda"){
		var optionArray = ["|","1000|1000","110|110","121|121","2|2","3|3","323|323","5|5","6|6","616|616","626|626","787|787","818|818","929|929","atenza|Atenza","axela|Axela","az|AZ","b|B","b-series|B-series","biante|Biante","bongo|Bongo","bt-50|BT-50","capella|Capella","carol|Carol","chante|Chante","cosmo|Cosmo","cx-5|CX-5","cx-7|CX-7","cx-9|CX-9","demio|Demio","drifter|Drifter","e2200|E2200","etude|Etude","eunos|Eunos","familia|Familia","lantis|Lantis","laputa|Laputa","levante|Levante","luce|Luce","marathon|Marathon","midge|Midge","millenia|Millenia","montrose|Montrose","mpv|MPV","ms-6|MS-6","ms-8|MS-8","ms-9|MS-9","mx-3|MX-3","mx-5|MX-5","mx-6|MX-6","persona|Persona","premacy|Premacy","proceed|Proceed","protege|Protege","r-100|R-100","r360|R360","rustler|Rustler","rx-2|RX-2","rx-3|RX-3","rx-4|RX-4","rx-7|RX-7","rx-8|RX-8","scrum|Scrum","sentia|Sentia","spiano|Spiano","tamashii|Tamashii","titan dash|Titan Dash","tribute|Tribute","verisa|verisa","washu|Washu","xedos|Xedos"];
	}
	 else if(id1.value == "Hyundai"){
		var optionArray = ["|","50d-7|50D-7","220lc-95|220LC-95","30df-7|30DF-7","33df-7|33DF-7","70df-7|70DF-7","accent|Accent","aero city|Aero City","atos|Atos","azera|Azera","clix|Clix","county|County","dynasty|Dynasty","elantra|Elantra","entourage|Entourage","equus|Equus","euro|Euro","excel|Excel","galloper|Galloper","genesis|Genesis","getz|Getz","grace|Grace","grandeur|Grandeur","h1|H1","h100|H100","h200|H200","h940s|H940S","hcd-7|HCD-7","hcd-iii|HCD-III","hd|HD","hd-65|HD-65","hd120|HD120","hd270|HD270","hd45|HD45","hd700|HD700","hd72|HD72","hed-6|HED-6","hl730|HL730","hl757-7a|HL757-7A","hl770-9s|HL770-9S","hsl850-7|HSL850-7","i10|i10","i20|i20","i30|i30","ix35|ix35","lantra|Lantra","marcia|Marcia","matrix|Matrix","mighty|Mighty","neos|Neos","panel|Panel","pony|Pony","portico|Portico","r140lc-9s|R140LC-9S","r210|R210","r220lc-7|R220LC-7","r260|R260","r300lc-9s|R300LC-9S","r330lc-9s|R330LC-9S","r340lc-7|R340LC-7","r380lc-9sh|R380LC-9SH","r80-7|R80-7","s|S","s-coupe|S-Coupe","santa fe|Santa Fe","santamo|Santamo","satellite|Satellite","sonata|Sonata","starex|Starex","stellar|Stellar","terracan|Terracan","tiburon|Tiburon","tipper|Tipper","trajet|Trajet","tuscon|Tuscon","veloster|Veloster","veracruz|Veracruz","verna|Verna","xg|XG"];
	}
	else if(id1.value == "Honda"){
		var optionArray = ["|","1300|1300","599|599","919|919","accord|Accord","accord crosstour|Accord CrossTour","acrura|Acrura","acty|Acty","acura mdx|Acura MDX","adrenalin|Adrenalin","airwave|Airwave","anf|ANF","ape|Ape","avancier|Avancier","ax-1|AX-1","ballade|Ballade","benly|Benly","big|Big","c90|C90","ca|CA","capa|Capa","cb|CB","cbr|CBR","cbx|CBX","cd|CD","cg|CG","cg 125|CG 125","cgl 125|CGL 125","ch|CH","city|City","civic|Civic","cj|CJ","cl|CL","cm|CM","cn|CN","concerto|Concerto","cr|CR","cr-v|CR-V","cr-z|CR-Z","crea|Crea","crf|CRF","crm|CRM","crossroad|Crossroad","crx|CRX","ct|CT","cx|CX","deauville|Deauville","dio|Dio","dn-01|DN-01","dream|Dream","dylan|Dylan","edix|Edix","element|Element","elite|Elite","elysion|Elysion","express|Express","f|F","fes|FES","fire|Fire","fit|Fit","fjr|FJR","fmx|FMX","foresight|Foresight","forza|Forza","fourtrax|FourTrax","fr-v|FR-V","freed|Freed","fsc|FSC","ft|FT","ftr|FTR","fuya|Fuya","gb|GB","gl|GL","goldwing|Goldwing","gorilla|Gorilla","gyro|Gyro","h|H","helix|Helix","hornet|Hornet","hr-v|HR-V","insight|Insight","inspire|Inspire","integra|Integra","interceptor|Interceptor","jazz|Jazz","lead|Lead","legend|Legend","life|Life","magna|Magna","mb5|MB5","metropolitan|Metropolitan","millenium|Millenium","mobilio|Mobilio","monkey|Monkey","mt|MT","mtx|MTX","n-box|N-BOX","nighthawk|Nighthawk","nr|NR","ns|NS","nsr|NSR","nss|NSS","nsx|NSX","nt|NT","ntv|NTV","nx|NX","odyssey|Odyssey","pantheon|Pantheon","partner|Partner","passport|Passport","pc|PC","pilot|Pilot","prelude|Prelude","ps|PS","px50|PX50","quintet|Quintet","rc|RC","rebel|Rebel","reflex|Reflex","ridgeline|Ridgeline","ruckus|Ruckus","rune|Rune","rvf|RVF","rvt|RVT","s-600|S-600","s-mx|S-MX","s-wing|S-Wing","s2000|S2000","s500|S500","s800|S800","scv|SCV","sfx|SFX","sh|SH","shadow|Shadow","shuttle|Shuttle","silverwing|SilverWing","sky|Sky","sl|SL","slr|SLR","smart|Smart","spike|Spike","ssm|SSM","st|ST","steed|Steed","stepwagon|Stepwagon","stream|Stream","sw-t400|SW-T400","that|That","tiger|Tiger","tl|TL","today|Today","torneo|Torneo","trx|TRX","unicorn|Unicorn","v65|V65","valkyrie|Valkyrie","vamos|Vamos","varadero|Varadero","vfr|VFR","vigor|Vigor","vt|VT","vtx|VTX","x-eleven|X-Eleven","x4|X4","x8r-s|X8R-S","xbr|XBR","xl|XL","xr|XR","z|Z","z4|Z4","z50r|Z50R","zoomer|Zoomer"];
	}
	 else if(id1.value == "Isuzu"){
		var optionArray = ["|","117|117","amigo|Amigo","ascender|Ascender","axiom|Axiom","bellet|Bellet","bighorn|Bighorn","como|Como","cxz|CXZ","d-max|D-MAX","direct|Direct","elf truck|ELF Truck","elf van|ELF Van","ffr|FFR","florian|Florian","forward|Forward","frontera|Frontera","frr|FRR","fsr|FSR","ftr|FTR","fts|FTS","fvr|FVR","fvx|FVX","fvz|FVZ","gemini|Gemini","giga|GIGA","hombre|Hombre","i-series|I-Series","impulse|Impulse","journey|journey","juston|Juston","kai|Kai","kb|KB","lb|LB","minx|Minx","new|New","nkr|NKR","npr|NPR","nqr|NQR","oasis|Oasis","piazza|Piazza","rodeo|Rodeo","stylus|Stylus","succeed|Succeed","tfr54|TFR54","tougher|Tougher","trooper|Trooper","vehicross|VehiCross","wizard|Wizard","zxs|ZXS"];
	}
	else if(id1.value == "Volkswagen"){
		var optionArray = ["|","1|1","1302|1302","1303|1303","1500|1500","1600|1600","181|181","411|411","aac|AAC","amarok|Amarok","beetle|Beetle","bora|Bora","cabriolet|Cabriolet","caddy|Caddy","caravelle|Caravelle","cc|CC","citi|Citi","commercial|Commercial","concept|Concept","corrado|Corrado","cross polo|Cross Polo","derby|Derby","eos|Eos","eurovan|Eurovan","fox|Fox","fusca|Fusca","gli|GLI","golf|Golf","hac|Hac","iltis|Iltis","jetta|Jetta","k|K","k70|K70","karmann-ghia|Karmann-Ghia","kombi|Kombi","lt|LT","lupo|Lupo","magellan|Magellan","microbus|Microbus","multivan|Multivan","parati|Parati","passat|Passat","phaeton|Phaeton","pickup|Pickup","pointer|Pointer","polo|Polo","quantum|Quantum","rabbit|Rabbit","routan|Routan","santana|Santana","schwimmwagen|Schwimmwagen","scirocco|Scirocco","sharan|Sharan","sp2|SP2","tiguan|Tiguan","touareg|Touareg","touran|Touran","transporter|Transporter","vento|Vento"];
	}
	 else if(id1.value == "Mercedes Benz"){
		var optionArray = ["|","300e|300E","300te|300TE","500se|500SE","609d|609D","814|814","911|911","a-class|A-Class","a180|A180","actros|Actros","ateco|Ateco","atego|Atego","axor|Axor","b-class|B-Class","c180|C180","c200|C200","c220|C220","c230|C230","c240|C240","c250|C250","c270|C270","c280|C280","c300|C300","c320|C320","c350|C350","c55|C55","c63|C63","citaro|Citaro","cito|Cito","cl|CL","cla-class|CLA-Class","clc|CLC","clk|CLK","cls|CLS","conecto|Conecto","e-class|E-Class","e200|E200","e220|E220","e230|E230","e240|E240","e250|E250","e270|E270","e280|E280","e300|E300","e320|E320","e330|E330","e350|E350","e420|E420","e430|E430","e50|E50","e500|E500","e55|E55","e550|E550","e63|E63","g-class|G-Class","g63|G63","gl class|GL Class","gla|GLA","glc|GLC","gle|GLE","glk|GLK","integro|Integro","intouro|Intouro","m class|M Class","mb100|MB100","ml 280|ML 280","ml 320|ML 320","ml 500|ML 500","ml350|ML350","ponton|Ponton","r class|R Class","s class|S Class","s350|S350","s550|S550","sc class|SC Class","sl class|SL Class","slk class|SLK Class","slr class|SLR Class","sprinter|Sprinter","t1|T1","t2|T2","tn|TN","tourismo|Tourismo","travego|Travego","unimog|Unimog","v230e|V230E","vaneo|Vaneo","viano|Viano","vito|Vito"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		id2.options.add(newOption);
	}
}
</script>



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
                <li><a href="insurance.php">Insurance</a></li>
                <li><a href="accessories.php">Accessories</a></li>
                <li><a href="tracking.php">Tracking</a></li>
                <li><a href="importers.php">Importers</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="freeagent.php">Individual Seller</a></li>
                <li><a href="#">Car Dealer</a></li>
               
            </ul>
            <nav>
                <div class="nav-wrapper  green darken-4">
                    <a href="index.php" class="brand-logo"><img src="images/SmartCars-Logo.png" style="height: 65px;"></a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<span class="mdi mdi-chevron-down right" style="line-height: 66px;"></span></a></li>
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Advertise Car<span class="mdi mdi-chevron-down right" style="line-height: 66px;"></span></a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Login/Register</a></li>
                    </ul>

                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="insurance.php">Insurance</a></li>
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="tracking.php">Tracking</a></li>
                        <li><a href="importers.php">Importers</a></li>
                        <li><a href="">Advertise Car</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Pricing</a></li>
                        <li><a href="">Login/Register</a></li>
                    </ul>
                </div>
            </nav>
        </div>
