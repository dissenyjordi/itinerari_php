<!-- START - Bootstrap Modals --> 
<!-- START - Modal - Ventana ELIMINAR Registros CRUD -->
<div class="modal fade" id="delete_<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- START - Modal Header -->
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Suprimir Producto</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <!-- END - Modal Header -->
            <!-- START - Modal Body -->
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Eliminar / Borrar ?</p>
                <p class="text-center">Nombre del producto:</p>
                <h2 class="text-center"><?php echo $task['nom']; ?></h2>
            </div>
            <!-- END - Modal Body -->
            <!-- START - Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="request/deleteRequest.php?id=<?php echo $task['id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si</a>
            </div>
            <!-- END - Modal Footer -->
        </div>
    </div>
</div>
<!-- END - Modal - Ventana ELIMINAR Registros CRUD -->
<!-- END - Bootstrap Modals -->