<?php

class SmartcarDB extends mysqli {

    private static $instance = null;
    private $user = "root";
    private $pass = "";
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
define('DB_USERNAME', 'root');//a10a1d_aiddist
define('DB_PASSWORD', '');
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

    public function get_insurors() {
        return $this->query("SELECT * FROM insurance_agents");
    }
    
     public function get_all_cars_sale() {
        //return $this->query("SELECT * FROM car WHERE (car_for='Sale' AND display_status=1)");
        $sale = 'Sale';
        //echo $sale;
           $stmt = $this->con->prepare("SELECT * FROM car WHERE car_for=? AND display_status=1");
        $stmt->bind_param("s",$sale);
       $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
        
    }
    
       public function get_all_cars_hire() {
        //return $this->query("SELECT * FROM car WHERE (car_for='Hire' AND display_status=1)");
        $Hire = 'Hire';
           $stmt = $this->con->prepare("SELECT * FROM car WHERE car_for=? AND display_status=1");
        $stmt->bind_param("s",$Hire);
       $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
    }
      public function get_car_by_make($make) {
          //$make1 = $this->real_escape_string($make);        
        //return $this->query("SELECT * FROM car WHERE make=$make1");
           $stmt = $this->con->prepare("SELECT * FROM car WHERE make=?");
        $stmt->bind_param("s",$make);
       $stmt->execute();
        $result = $stmt->get_result();
        //$stmt->close();
        return $result;
    }

}
?>

