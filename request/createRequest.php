<?php
require_once '../controllers/task_CRUD.php';

    /* START - Validacion de los "DATA" del lado del servidor */
    if (empty($_POST['nom'])){
            $errors[] = "Falta el nombre del producto";
	} else if (empty($_POST['quantitat'])){
            $errors[] = "Cantidad entre 0 y 1000";
	} else if (empty($_POST['preu'])){
            $errors[] = "Falta el precio del producto. Ejemplo: 2,59";
	}   else if (
            !empty($_POST['nom']) && 
            !empty($_POST['quantitat']) &&
            !empty($_POST['preu'])
        )
    /* END - Validacion de los "DATA" del lado del servidor */
            
$nom = $_POST['nom'];
$quantitat = $_POST['quantitat'];
$preu = $_POST['preu'];
//$descripcio-imatge = $_POST['descripcio-imatge'];
//$imatge = $_POST['imatge'];

$request = [
    "nom" => $nom,
    "quantitat" => $quantitat,
    "preu" => $preu,
    //"descripcio-imatge" => $descripcio-imatge,
    //"imatge" => $imatge
];

$task = new Task();
$result = $task->create($request);

// START - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021
$task = new Task();
$result = $task->idImage();
// END - recuperar ID, para insertat IMAGEN a la B.B.D.D. 29.04.2021

// START - insertat IMAGEN y crear carpeta para las imagenes con cada ID
foreach($result as $task) {
$last_id = $task['id'];    
}
$last_id = (int) $last_id;

    if($_FILES["arxiu"]["error"]>0){
        echo "Error al cargar la imagen";
    } else {
        // tipos de archivos permitidos
        $permitidos = array("image/gif","image/jpeg","image/png");
        // tamaño maximo archivo (200kb = 200 x 1024)
        $limit_kb = 200;
        
                if(in_array($_FILES["arxiu"]["type"], $permitidos) && $_FILES["arxiu"]["size"] <= $limit_kb * 1024){
                    // ruta para cada ID de la B.B.D.D.
                    $ruta = '../files/'.$last_id.'/';
                    // nombre del archivo 
                    $archivo = $ruta.$_FILES["arxiu"]["name"];

                            // START - comprovar si existe la ruta
                            if(!file_exists($ruta)){
                                // si no existe la ruta, crear la carpeta
                                mkdir($ruta);
                            }

                                    // START - comprovar archivos duplicados
                                    if(!file_exists($archivo)){
                                        $resulado = @move_uploaded_file($_FILES["arxiu"]["tmp_name"], $archivo);

                                                // START - evaluar
                                                if($resulado){
                                                    echo'<script type="text/javascript">alert("Tarea Guardada");
                                                            window.location.href="master.php";
                                                        </script>';
//                                                    echo "Archivo guardado";
                                                } else {
                                                    echo "Error al guardar archivo";
                                                }
                                                // END - evaluar

                                    } else { 
                                        echo "El archivo ya existe";
                                    }
                                    // END - comprovar archivos duplicados

                } else {
                    echo "Archivo no permitido, o excede el tamaño";
                }
    }
// END - insertat IMAGEN y crear carpeta para las imagenes con cada ID
   
if ($result->connect_error) {
    echo "Error BD: Transaction error";
} else {
    header("Location: ../master.php");
}
?>