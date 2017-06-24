<?php

class SmartcarDB extends mysqli {

    private static $instance = null;
    private $user = "smartcar_new";
    private $pass = "]V9W6=hT#wbM";
    private $dbName = "smartcarnew";
    private $dbHost = "88.99.28.154";

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
        parent::__construct($this->dbHost, $this->user, $this->pass, $this->dbName);
        if (mysqli_connect_error()) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset('utf-8');
    }

    public function create_subscription($email){
        $email = $this->real_escape_string($email);
        $this->query("INSERT INTO subscription (email) VALUES ('" . $email . "')");
    }

}
?>

