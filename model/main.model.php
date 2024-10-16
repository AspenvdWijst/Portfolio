<?php
class contactmodel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function createpost($name, $email, $message){
        try{
            $stmt = $this->conn->prepare("insert into contact (name, email, content) value (:fullname, :email, :message)");
            $stmt->bindParam(':fullname', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            } catch(PDOException $e){
            echo "send error: " . $e->getMessage();
            die(var_dump($e->getMessage()));
        }
    }
}
