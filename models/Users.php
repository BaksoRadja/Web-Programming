<?php
require 'DbConnection.php';

class User
{
    protected $firstname;
    protected $lastname;
    protected $username;
    protected $password;
    protected $id_user;
    protected $email;
    protected $db;

    public function __construct($firstname = NULL, $lastname = NULL, $username = NULL, $password = NULL, $id_user = NULL, $email = NULL){
        $this->db = new DbConnection();
        if ($firstname != NULL && $lastname != NULL && $username != NULL && $password != NULL && $id_user != NULL && $email != NULL) {
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->username = $username;
            $this->password = $password;
            $this->id_user = $id_user;
            $this->email = $email;
        }
    }

    public function login($username, $password) {

        $sql = 'SELECT * FROM user_account WHERE username = `:usr` AND password = `:pwd`';
        try {
            $conn = $this->db->connect(); //connect ke db

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':usr', $username);
            $stmt->bindParam(':pwd', $password);

            $stmt->execute([$sql]);

            $datauser = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $datauser;
        } catch (PDOException $e) {
            echo $sql . '<br>' . $e->getMessage();
        }
    }
    public function check_dupli_user(){
        $sql = 'SELECT username, email FROM employee, customer WHERE username = `:usr` OR email = `:eml`';

        try {

        } catch (PDOException $e) {
            echo $sql . '<br>' . $e->getMessage();
        }
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

class Customer extends User
{

    public function __construct($firstname, $lastname, $username, $password, $id_user, $email)
    {
        parent::__construct($firstname, $lastname, $username, $password, $id_user, $email);
    }

    public function simpan() {
        $sql = 'INSERT INTO `customer` (`first_name`, `last_name`, `email`, `username`, `password`) 
                VALUES (:fn, :ln, :eml, :usr, :pwd);';
        try {
            $conn = $this->db->connect(); //connect ke db

            $stmt = $conn->prepare($sql);
            //bind Parameter
            $stmt->bindParam(':fn', $this->firstname);
            $stmt->bindParam(':ln', $this->lastname);
            $stmt->bindParam(':eml', $this->email);
            $stmt->bindParam(':usr', $this->username);
            $stmt->bindParam(':pwd', $this->password);
            //executing prepared statement
            $stmt->execute();
        } catch (PDOException $e) {
            echo $sql . '<br>' . $e->getMessage();
        }

        $this->db->close();
    }
}

class Employee extends User {
    private $role;

    public function __construct($firstname, $lastname, $username, $password, $id_user, $email) {
        parent::__construct($firstname, $lastname, $username, $password, $id_user, $email);
    }

    public function simpan() {
        $sql = 'INSERT INTO `employee` (`first_name`, `last_name`, `email`, `username`, `password`, `role`)
                VALUES (:fn, :ln, :eml, :usr, :pwd, :rol)';
        try {
            $conn = $this->db->connect(); //connect ke db

            $stmt = $conn->prepare($sql);
            //bind Parameter
            $stmt->bindParam(':fn', $this->firstname);
            $stmt->bindParam(':ln', $this->lastname);
            $stmt->bindParam(':eml', $this->email);
            $stmt->bindParam(':usr', $this->username);
            $stmt->bindParam(':pwd', $this->password);
            $stmt->bindParam(':rol', $this->role);
            //executing prepared statement
            $stmt->execute();
        } catch (PDOException $e) {
            echo $sql . '<br>' . $e->getMessage();
        }
    }
}

?>