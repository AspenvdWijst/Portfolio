<?php
class contactController {
    private $contact;
    public function __construct($conn)
    {
        require "./model/main.model.php";
        $this->contact = new contactmodel($conn);
    }

    public function makepost(): void{
        $this->contact->createpost($_POST["name"], $_POST["email"], $_POST["message"]);
    }
}