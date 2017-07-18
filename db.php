<?php

class SmartcarDB extends mysqli {

    private static $instance = null;
    private $user = "smartcar_user";
    private $pass = "WZRHLk8pI4~R";
    private $dbName = "smartcar_vehicles";
    private $dbHost = "localhost";

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }

    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }

    private function __construct() {
        define('DB_USERNAME', 'smartcar_user'); //a10a1d_aiddist
        define('DB_PASSWORD', 'WZRHLk8pI4~R');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'smartcar_vehicles');
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }

        return $this->con;
        //parent::set_charset('utf-8');
    }

    public function create_subscription($email) {
        $email = $this->real_escape_string($email);
        $this->query("INSERT INTO subscription (email) VALUES ('" . $email . "')");
    }

    public function create_guru($fname, $lname, $tel, $email) {
        $fname = $this->real_escape_string($fname);
        $lname = $this->real_escape_string($lname);
        $tel = $this->real_escape_string($tel);
        $email = $this->real_escape_string($email);
        $this->query("INSERT INTO gurus (fname,lname,tel,email) VALUES ('" . $fname . "','" . $lname . "','" . $tel . "','" . $email . "')");
    }

    public function get_insurance_agents() {

        $stmt = $this->con->prepare("SELECT * FROM insurance_agents");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function get_accessory_agents() {

        $stmt = $this->con->prepare("SELECT * FROM accessories_agents");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function get_inporting_agents() {

        $stmt = $this->con->prepare("SELECT * FROM importers_agents");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function get_tracking_agents() {
        $stmt = $this->con->prepare("SELECT * FROM tracking_agents");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function get_all_cars_sale() {
        //return $this->query("SELECT * FROM car WHERE (car_for='Sale' AND display_status=1)");
        $sale = 'Sale';
        //echo $sale;
        $stmt = $this->con->prepare("SELECT * FROM car WHERE car_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $sale);
        $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
    }

    public function get_all_cars_hire() {
        //return $this->query("SELECT * FROM car WHERE (car_for='Hire' AND display_status=1)");
        $Hire = 'Sale';
        $stmt = $this->con->prepare("SELECT * FROM car WHERE car_for=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s", $Hire);
        $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
    }

    public function get_car_by_make($make) {
        //$make1 = $this->real_escape_string($make);        
        //return $this->query("SELECT * FROM car WHERE make=$make1");
           $stmt = $this->con->prepare("SELECT * FROM car WHERE make=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s",$make);
       $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
    }
    
       public function get_car_by_search($car_make,$car_model,$min_price,$max_price) {
          //$make1 = $this->real_escape_string($make);        
        //return $this->query("SELECT * FROM car WHERE make=$make1");
             if ($car_make !=false AND $car_model !=false AND $min_price !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE (make=? AND model=? AND actual_amount >=? AND display_status=1) ORDER BY RAND()");
        $stmt->bind_param("sss",$car_make,$car_model,$min_price);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
           
                elseif ($car_make !=false AND $min_price !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE (make=? AND actual_amount >=? AND display_status=1) ORDER BY RAND()");
        $stmt->bind_param("ss",$car_make,$min_price);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
           
                elseif ($car_make !=false AND $car_model !=false AND $max_price !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE (make=? AND model=? AND actual_amount <=? AND display_status=1) ORDER BY RAND()");
        $stmt->bind_param("sss",$car_make,$car_model,$max_price);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
           
                elseif ($car_make !=false AND $max_price !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE (make=? AND actual_amount <=? AND display_status=1) ORDER BY RAND()");
        $stmt->bind_param("ss",$car_make,$max_price);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
           
           elseif ($car_make !=false AND $car_model !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE (make=? AND model=? AND display_status=1) ORDER BY RAND()");
        $stmt->bind_param("ss",$car_make,$car_model);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
            elseif ($car_make !=false){
              
           $stmt = $this->con->prepare("SELECT * FROM car WHERE make=? AND display_status=1 ORDER BY RAND()");
        $stmt->bind_param("s",$car_make);
         $stmt->execute();
        $result = $stmt->get_result();
        return $result;
           }
      
        //$stmt->close();
        
    }

}

?>

