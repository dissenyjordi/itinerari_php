<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'includes/header.php' ?>
    <body>
        <?php
            require_once 'controllers/task_CRUD.php';
            $task = new Task;
            
            // Tasks list
            $tasks = $task->list();            
        ?>
        
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <!-- formulario -->
                    <form method="POST" action="request/createRequest.php">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                         
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="form-control" id="status" name="status">
                            <option>to do</option>
                            <option>doing</option>
                            <option>done</option>
                          </select>
                        </div>
                        
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                <div class="col-md-6">
                    <table class="table">
                       <thead>
                         <tr>
                           <th scope="col">#</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Precio</th>
                           <th scope="col">Cantidad</th>
                           <th scope="col">Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                          <?php foreach($tasks as $task): ?>
                         <tr>
                           <th scope="row"><?php echo $task['id'] ?></th>
                           <td><?php echo $task['nom'] ?></td>
                           <td><?php echo $task['preu'] ?></td>
                           <td><?php echo $task['quantitat'] ?></td>
                           <td><?php echo $task['imatge'] ?></td>
                           <td>
                               <a class="btn btn-secondary" href="edit_?id=<?php echo $task['id'] ?>"><i class="fas fa-pen-alt"></i></a>
                               <a class="btn btn-danger" href="request/deleteRequest.php?id=<?php echo $task['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                           </td>
                         </tr>
                         <?php endforeach; ?>
                       </tbody>
                     </table>
                </div>
            </div>
        </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>

