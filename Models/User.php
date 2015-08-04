<?php

class User {

    private $id;
    private $nama;
    private $password;

    private $host;
    private $usernmdb;
    private $passdb;
    private $db;

    private $connect;

    function __construct($host, $username, $password, $db) {
        $this->host = $host;
        $this->usernmdb = $username;
        $this->passdb = $password;
        $this->db = $db;

        $this->connect = mysqli_connect($this->host,$this->usernmdb,$this->passdb,$this->db);

        $connect = $this->connect;

        if ($connect->connect_error) {
            die('Connect Error (' . $connect->connect_errno . ') '
                . $connect->connect_error);
        }
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    private function save() {
    }

    function delete() {
    }

    function update() {
    }

    function read() {
        return $this->getAllResult();
    }

    private function getAllResult() {
        $query = mysqli_query($this->connect, "SELECT * FROM user ");

        /* check connection */
        if (mysqli_num_rows($query) < 1) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        return $query;
    }
}