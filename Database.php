<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexaoBD
 *
 * @author Kleberus
 */
class Database {

    private $host, $dbName, $user, $password;

    public function __construct($host, $dbName, $user, $password) {

        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
       return $con = new PDO("mysql:host=$this->host; dbname=$this->dbName", "$this->user", "$this->password");
    }

}
