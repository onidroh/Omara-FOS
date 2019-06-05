<div class="container">
    <div class="card espacio">
        <h5 class="card-header"><?php echo $usuarios->id != null ? "Editar ".$usuarios->nombre . " " . $usuarios->apellido : 'Nuevo Registro'; ?></h5>
        <div class="card-body">
            <form action="?c=usuario&a=actualiza" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $usuarios->id; ?>">
               <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $usuarios->nombre; ?>" placeholder="Ingrese su nombre" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellido" value="<?php echo $usuarios->apellido; ?>" placeholder="Ingrese su nombre" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>RUT</label>
                            <input type="text" class="form-control" name="rut" value="<?php echo $usuarios->rut; ?>"  required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha" value="<?php echo $usuarios->fecha_nac; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección de correo</label>
                    <input type="email" class="form-control" name="correo" value="<?php echo $usuarios->correo; ?>" >
                </div>
                <input type="submit" style="float:right;" value="Editar Usuario" class="btn btn-primary">
            </form>
        
        </div>
    </div>
</div>