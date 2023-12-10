<?php

class DbConnection
{
    private $db_host;
    private $db_user;
    private $db_pwd;
    private $db_name;
    private $conn;

    public function __construct()
    {
        $this->db_host = 'localhost';
        $this->db_user = 'BaksoRadja';
        $this->db_pwd = 'Baksoradja_123';
        $this->db_name = 'service-in_aja';
    }


    public function connect()
    {
        $dsn = "mysql:host=$this->db_host;dbname=$this->db_name;charset=UTF8";
        try {
            $this->conn = new PDO($dsn, $this->db_user, $this->db_pwd);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection success";
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed : " . $e->getMessage();
        }
    }

    public function close()
    {
        $this->conn = null;
    }
}

?>