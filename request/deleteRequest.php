<?php
require_once '../controllers/task_CRUD.php';

    /* START - Validacion de los "DATA" del lado del servidor */
    if (!isset($_GET['id']) || $_GET['id'] == '') {
         header("Location: ../master.php");
    }
    /* END - Validacion de los "DATA" del lado del servidor */

$id = $_GET['id'];

$task = new Task();
$result = $task->delete($id);

//eliminarDir('files/'.$id);

//function eliminarDir($carpeta){
//    foreach (glob($carpeta . "/*") as $archivos_carpeta) {
//        if (is_dir($archivos_carpeta)){
//            eliminarDir($archivos_carpeta);
//        } else {
//            unlink($archivos_carpeta);
//        }
//    }
//    rmdir($carpeta);
//}

if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../master.php");
}