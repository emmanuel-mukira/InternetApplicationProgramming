<?php
class dbConnection{
    private $conn;
    private $db_type;
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $db_port;

    public function __construct($db_type, $db_host, $db_user, $db_pass, $db_name, $db_port){
        $this->db_type = $db_type;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
        $this->db_port = $db_port;
        $this->connection($db_type, $db_host, $db_user, $db_pass, $db_name, $db_port);
    }

    public function connection($db_type, $db_host, $db_user, $db_pass, $db_name, $db_port){
        switch ($db_type) {
            case 'MYSQLi':
                if ($db_port != null) {
                    $db_host .= ":".$db_port;
                }
                $this->conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                if ($this->conn->connect_error) {
                    die("Connection failed: " . $this->conn->connect_error);
                }
                return $this->conn;
            case 'PDO':
                if ($db_port != null) {
                    $db_host .= ":".$db_port;
                }
                try {
                    $this->conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully";
                } catch (PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                }
                return $this->conn;
        }
    }

    // Add this method to return the connection object
    public function getConnection() {
        return $this->conn;
    }
}
