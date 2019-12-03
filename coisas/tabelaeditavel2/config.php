<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function dbConfig() {
        $this -> serverName = 'localhost';
        $this -> userName = 'Melvin';
        $this -> password = "fac@2019";
        $this -> dbName = "reservasalas";
    }
}
?>