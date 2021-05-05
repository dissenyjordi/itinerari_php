<?php
// Creamos la clase Connection
class Connection {
    // START - Valores para acceder al servidor y a la B.B.D.D.
    private $host;
    private $username;
    private $passwd;
    private $dbname;
    // END - Valores para acceder al servidor y a la B.B.D.D.
    
    // START - Función Constructor, acceder al servidor y a la B.B.D.D.
    function __construct() {
        $this->host = '127.0.0.1';
        $this->username = 'root';
        $this->passwd = 'root';
        $this->dbname = 'Tasca-M8';
    }
    // END - Función Constructor, acceder al servidor y a la B.B.D.D.
    
    // START - Función CREAR conexión al servidor y a la B.B.D.D.
    function create() {
        $connection = new mysqli($this->host, $this->username, $this->passwd, $this->dbname);
        if ($connection->connect_error)
            die('<h3>Problemes de la conexió a la Base de Dades</h3>');
        return $connection;
    }
    // END - Función CREAR conexión al servidor y a la B.B.D.D.
    
    // START - Función CERRAR conexión al servidor y a la B.B.D.D.
    function close($connection) {
        $connection->close();
    }
    // END - Función CERRAR conexión al servidor y a la B.B.D.D.
}

//if ($connection->connect_error) {
//    die('Error de conexion '. $connection->connect_error);
//} else {
//    echo 'Problema bd';
//}
?>