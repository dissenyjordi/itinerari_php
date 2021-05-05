 <!-- START - Bootstrap Modals --> 
<!-- START - Modal - Add / New Registros CRUD -->
<!-- link: https://getbootstrap.com/docs/4.6/components/forms/?#validation SECTION: Custom styles -->
<form method="POST" action="request/createRequest.php" enctype="multipart/form-data" class="needs-validation" novalidate>
    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- START - Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Nuevo producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <!-- END - Modal Header -->
                    <!-- START - Modal Body -->
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nom">Nombre del producto:</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Raïm" required>
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">Falta el nombre del producto</div>
                        </div>
                        <div class="form-group">
                            <label for="preu">Precio:</label>
                            <input type="number" class="form-control" id="preu" name="preu" min="0" max="1000" step="0.01" placeholder="Ejemplo: 2,59" required autofocus>
                            <div class="valid-feedback">Correcto.</div>
                            <div class="invalid-feedback">Falta el precio del producto. Ejemplo: 2,59</div>
                        </div>
                        <div class="form-group">
                                <label for="quantitat">Cantidad:</label>
                                <input type="number" class="form-control" id="quantitat" name="quantitat" min="0" max="1000" step="1.00" placeholder="Ejemplo: 1" required>
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
                    </div>
                    <!-- END - Modal Body -->
                    <!-- START - Modal Footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                    </div>
                <!-- END - Modal Footer -->
            </div>
        </div>
    </div>
</form>
<!-- END - Modal - Add / New Registros CRUD -->
<!-- END - Bootstrap Modals -->