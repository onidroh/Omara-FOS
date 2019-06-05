<div class="container">
    <div class="card espacio">
        <h5 class="card-header">Usuarios</h5>
        <div class="card-body">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <a href="?c=usuario&a=crear"><button class="btn btn-outline-primary" style="float: right; margin-bottom: 1rem;" type="button">Crear Nuevo Usuario</button></a>
            </div>
        </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">RUT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->model->Listar() as $usr): ?>
                    <tr>
                        <th scope="row"><?= $usr->rut; ?></th>
                        <td><?= $usr->nombre; ?></td>
                        <td><?= $usr->apellido; ?></td>
                        <td><?= $usr->correo; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="?c=usuario&a=editar&id=<?= $usr->id; ?>"><button type="button" class="btn btn-success">Editar</button></a>
                                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=usuario&a=eliminar&id=<?php echo $usr->id; ?>"><button type="button" class="btn btn-danger">Borrar</button></a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>