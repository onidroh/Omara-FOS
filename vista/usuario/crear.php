<div class="container">
    <div class="card espacio">
        <h5 class="card-header">Nuevo Registro</h5>
        <div class="card-body">
            <form action="?c=usuario&a=guardar" method="POST" enctype="multipart/form-data">
               <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="apellido" placeholder="Ingrese su nombre" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Ingrese su password" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>RUT</label>
                            <input type="text" class="form-control" name="rut" placeholder="Ingrese su RUT sin puntos" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Fecha Nacimiento</label>
                            <input type="date" class="form-control" name="fecha" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección de correo</label>
                    <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo">
                </div>
                <input type="submit" style="float:right;" value="Crear" class="btn btn-primary">
            </form>
        
        </div>
    </div>
</div>