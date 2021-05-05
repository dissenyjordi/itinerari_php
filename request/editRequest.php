<?php
require_once '../controllers/task_CRUD.php';

    /* START - Validacion de los "DATA" del lado del servidor */
    if (!isset($_GET['id']) || $_GET['id'] == ''){
        header("Location: ../master.php");
    }
    /* END - Validacion de los "DATA" del lado del servidor */

$id = $_GET['id'];
//$nom = $_POST['nom'];
//$quantitat = $_POST['quantitat'];
//$preu = $_POST['preu'];
//$descripcio-imatge = $_POST['descripcio-imatge'];
//$imatge = $_POST['imatge'];

    if (!isset($_POST['nom']) || $_POST['nom'] == ''
       || !isset($_POST['quantitat']) || $_POST['quantitat'] == ''
       || !isset($_POST['preu']) || $_POST['preu'] == '') {
        exit('ERROR BD: Transaction error');
    }
    
$request = [
    "id" => $id,
    "nom" => $_POST['nom'],
    "quantitat" => $_POST['quantitat'],
    "preu" => $_POST['preu']
    //"descripcio-imatge" => $_POST['descripcio-imatge'],
    //"imatge" => $_POST['imatge']
];

// START - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021
$path = "files/".$id;
if(file_exists($path)){
    $dir = opendir($path);
            while ($archivo = readdir($dir)){
                    if(!is_dir($archivo)){
                        echo "<div data='".$path."/".$archivo."'>
                            <a href'".$path."/".$archivo."' title='Ver archivo adjunto'><span class='glyphicon glyphicon-picture'></span></a>";
                        echo "$archivo <a href='#' class='delete' title='Ver archivo adjunto'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
                        echo "<img src='files/$id/$archivo' width='300' />";
                    }
            }
}
// END - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021

$task = new Task();
$result = $task->update($request);

if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../master.php");
}
?>