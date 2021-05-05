<?php
// START - archivo requerido, conexion a B.B.D.D.
require_once 'conexion.php';
// END - archivo requerido, conexion a B.B.D.D.

class Task {
    
    // START - función listar contenido READY
    function list() {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create();
        // END - crear la conexión a B.B.D.D.
         
        // START - consulta a la B.B.D.D.
        $result=$mysqli->query("SELECT * FROM compra");
        $tasks = $result->fetch_all(MYSQLI_ASSOC);
        // END - consulta a la B.B.D.D.
 
        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión
        
        return $tasks;
    }
    // END - función listar contenido READY

//-----

    // START - función insertar nuevo ITEM al contenido CREATE
    function create($request) {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create();
        // END - crear la conexión a B.B.D.D.
 
        // START - consulta a la B.B.D.D.
        $result = $mysqli->query("INSERT INTO compra(nom,quantitat,preu) values ('{$request['nom']}','{$request['quantitat']}','{$request['preu']}')");
        // END - consulta a la B.B.D.D.
        
        // START - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021
        $id_insert = $mysqli->insert_id;
        // END - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021
 
        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión

        return $result;  
    }
    // END - función insertar nuevo ITEM al contenido CREATE

//-----

    // START - función ver ITEM al contenido SHOW
    function show($id) {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysql = $connection->create();
        // END - crear la conexión a B.B.D.D.
        
        // START - consulta a la B.B.D.D.
        $result = $mysql->query("SELECT * FROM compra WHERE id = $id");
        $task = $result->fetch_assoc();
        // END - consulta a la B.B.D.D.

        // START - cerrar conexión
        $connection->close($mysql);
        // END - cerrar conexión

        return $task;        
    }
    // END - función ver ITEM al contenido SHOW

//-----

    // START - función actualizar ITEM al contenido UPDATE
    function update($request) {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create();
        // END - crear la conexión a B.B.D.D.
        
        // START - consulta a la B.B.D.D.
        $result = $mysqli->query("UPDATE compra SET nom ='{$request['nom']}', quantitat ='{$request['quantitat']}', preu ='{$request['preu']}' WHERE id = '{$request['id']}'");
        // END - consulta a la B.B.D.D.

        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión

        return $result;  
    }
    // END - función actualizar ITEM al contenido UPDATE

//-----
    
    // START - función eliminar ITEM al contenido DELETE
    function delete($id) {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create();
        // END - crear la conexión a B.B.D.D.
        
        // START - consulta a la B.B.D.D.
        $result = $mysqli->query("DELETE FROM compra WHERE id = $id");
        // END - consulta a la B.B.D.D.
        
        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión

        return $result;  
    }
    // END - función eliminar ITEM al contenido DELETE

//-----
        
    // START - función numero de ID's ACTIVOS en la tabla de la B.B.D.D. 
    function numRow() {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create(); 
        // END - crear la conexión a B.B.D.D.

        // START - consulta a la B.B.D.D.
        if ($result = $mysqli->query("SELECT id FROM compra")){
            // Return the number of rows in result set
            $rowCount=$result->num_rows;
            }
        // END - consulta a la B.B.D.D.
        
        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión
        
        return $rowCount;  
    }
    // END - función numero de ID's ACTIVOS en la tabla de la B.B.D.D.

//-----
        
    // START - función buscar NOMBRE en la tabla de la B.B.D.D. 
    function search() {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create(); 
        // END - crear la conexión a B.B.D.D.

        // START - consulta a la B.B.D.D.

        // END - consulta a la B.B.D.D.
        
        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión
        
        return $search;  
    }
    // END - función buscar NOMBRE en la tabla de la B.B.D.D.

//-----

    // START - función insertar nuevo ITEM al contenido CREATE
    function idImage() {
        // START - crear la conexión a B.B.D.D.
        $connection = new Connection();
        $mysqli = $connection->create();
        // END - crear la conexión a B.B.D.D.
   
        // START - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021
        $sql = "SELECT id FROM compra ORDER BY id DESC LIMIT 1";
        $result = $mysqli->query($sql);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        // END - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021

        // START - cerrar conexión
        $connection->close($mysqli);
        // END - cerrar conexión

        return $result;  
    }
    // END - función insertar nuevo ITEM al contenido CREATE
}
?>