        <script>
                $(document).ready(function() {
                    $('.delete').click(function() {
                        var parent = $(this).parent().attr('id');
                        var service = $(this).parent().attr('data');
                        var dataString = 'id='+service;

                        $.ajax({
                           type: "POST",
                           url: "request/del_file.php",
                           data: dataString,
                           success: function(){
                               location.reload();
                           }
                        });
                    });
                });
        </script>
<?php include 'includes/header.php'; ?>
<!-- START - Bootstrap Modals --> 
<!-- START - Modal - Ventana EDITAR Registros CRUD -->
<form method="POST" action="request/editRequest.php?id=<?php echo $task['id']; ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
<div class="modal fade" id="edit_<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- START - Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Actualizar producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- END - Modal Header -->
                <!-- START - Modal Body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">Id Producto, <strong>no se puede modificar</strong></label>
                        <input type="text" class="form-control" id="id" name="id" value="<?php echo $task['id'] ?>" placeholder="Número de identificador único. Ejemplo: 5" disabled/>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nombre del producto</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $task['nom'] ?>" placeholder="Ejemplo: Raïm vermell sense llavors, Sweet celebration" autofocus required/>
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">Falta el nombre del producto.</div>
                    </div>
                    <div class="form-group">
                        <label for="preu">Precio por cantidad</label>
                        <input type="number" class="form-control" id="preu" name="preu" value="<?php echo $task['preu'] ?>" min="0" max="1000" step="0.01" placeholder="Ejemplo: 2,59" required/>
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">Falta el precio del producto. Ejemplo: 2,59</div>
                    </div>
                    <div class="form-group">
                        <label for="quantitat">Cantidad</label>
                        <input type="number" class="form-control" id="quantitat" name="quantitat" value="<?php echo $task['quantitat'] ?>" min="0" max="1000" step="1" placeholder="Ejemplo: 1" required/> 
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">Cantidad entre 0 y 1000</div>
                    </div>
                        <div class="form-group">
                            <label for="arxiu">Imagen:<br> <em>tipos de formatos permitidos: <strong>JPG, PNG y GIF</strong></em></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="arxiu" name="arxiu" lang="es">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                </div>
                        </div>
                        <?php
                        // START - recuperar la IMAGEN/ES apartir del ID 29.04.2021
                            $path = "files/".$task['id'];
                            echo "<label>Nombre del archivo en el servidor:</label>";
                            if(file_exists($path)){
                                $dir = opendir($path);
                                        while ($archivo = readdir($dir)){
                                                if(!is_dir($archivo)){
                                                    echo "<div data'" . $path . "/" . $archivo . "'><a href='" . $path . "/" . $archivo . "' title='Ver archivo adjunto'><span class='fas fa-picture-o fa-fx' aria-hidden='true'></span></a>";
                                                    echo "$archivo <a href='#' class='delete' title='Eliminar archivo adjunto' ><span class='fas fa-trash-alt fa-fx' aria-hidden='true'></span></a></div>";
                                                    echo "<img class='rounded' src='files/".$task['id']."/".$archivo."' width='465' /><br>";
//                                                    echo "<div>". $archivo . " " . "<a href='#' class='delete' title='Eliminar archivo adjunto'></a><span class='fas fa-trash-alt fa-fx'> </span></div><br>";
//                                                    echo "<img class='rounded' src='files/".$task['id']."/$archivo' width='465' /><br>";
                                                }
                                        }
                            }
                        // END - recuperar la IMAGEN/ES apartir del ID 29.04.2021
                        ?>                   
                        <br>
                    
                <!-- END - Modal Body -->
                <!-- START - Modal Footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                </div>
            <!-- END - Modal Footer -->
        </div>
    </div>
</div>
</form>
<!-- END - Modal - Ventana EDITAR Registros CRUD -->
<!-- END - Bootstrap Modals --> 