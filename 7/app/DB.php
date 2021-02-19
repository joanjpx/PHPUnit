<?php
namespace App;
Class DB
{
    // Definicion de atributos
    private $host;
    private $user;
    private $password;
    private $database;
    private $conn;

    public function __construct()
    {
        //Constructor
        $this->host = "127.0.0.1";
        $this->user = "root";
        $this->password = "";
        $this->database = "phpunit_test";
    }

    public function CreateConnection()
    {
        // Metodo que crea y retorna la conexion a la BD.
        $this->conn = new \MySQLi($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_errno) {
            die("Error al conectarse a MySQL: (" . $this->conn->connect_errno . ") " . $this->conn->connect_error);
        }
    }

    public function CloseConnection()
    {
        //Metodo que cierra la conexion a la BD
        $this->conn->close();
    }

    public function ExecuteQuery($sql)
    {
        $result = $this->conn->query($sql);
        return $result;
    }

    public function GetCountAffectedRows()
    {

        return $this->conn->affected_rows;
    }

    public function GetRows($result)
    {
        return $result->fetch_row();
    }

    public function SetFreeResult($result)
    {
        $result->free_result();
    }
}