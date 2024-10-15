<?php
class contactmodel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function createpost(){
        if(empty($id)) {
            $stmt = $this->conn->prepare("insert into contact (name, email, message) values(:name, :email, :message)");
                $stmt->bindParam(':name', $name . ':email', $email . ':message', $message);
            $stmt->execute();
            } else{
            echo "send error";
        }
    }
}
