<?php

class config {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '123456';
    private $database_name = 'dbob';

    public function getServer() {return $this->server;}
    public function getUserName() {return $this->username;}
    public function getPassword() {return $this->password;}
    public function getDataBaseName() {return $this->database_name;}
}

?>
