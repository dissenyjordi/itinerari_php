    <?php include('includes/header.php'); ?>
    <body>
    <?php include('newModal.php'); ?>
    <?php require_once 'controllers/task_CRUD.php';
        $task = new Task;
        // Tasks list
        $tasks = $task->list();            
    ?>

    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Curso de PHP y MySQL</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-inline" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <input class="form-control form-control-sm mr-sm-2" type="text" id="search" name="search" placeholder="Nombre del producto">
                        <button class="btn btn-primary btn-sm" type="submit" id="enviar" name="enviar" value="Buscar">Buscar</button>
                    </form>
                </div>
                <div class="col-md-6 text-right">
                        <a href="#add_new_record_modal" class="btn btn-success btn-sm" data-toggle="modal" data-target=><i class="fas fa-plus fa-fx"></i> Nuevo producto</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id Producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Unidad</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($tasks as $task): ?>
                            <tr>
                                <td><?php echo $task['id']; ?></td>
                                <td><?php echo $task['nom']; ?></td>
                                <td><?php echo $task['preu']; ?></td>
                                <td><?php echo $task['quantitat']; ?></td>
                                <td class="text-right">
                                    <a href="#edit_<?php echo $task['id']; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><span class="fas fa-edit fa-fx"></span> Editar</a>
                                    &nbsp;
                                    <a href="#delete_<?php echo $task['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fas fa-trash-alt fa-fx"></span> Borrar</a>
                                </td>
                                <?php include('deleteModal.php'); ?>
                                    <?php include('updateModal.php'); ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id Producto</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Unidad</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                        <?php require_once 'controllers/task_CRUD.php';
                            $task = new Task;
                            // Tasks numRow
                            $rowCount = $task->numRow();
                            echo '<p class="text-center">Número de total de registros <strong>'. $rowCount.'</strong></p>';
                        ?>
                </div>
            </div>
        </div>
    <?php include 'includes/footer.php' ?>
    </body>
</html>