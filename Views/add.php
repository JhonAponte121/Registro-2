

<div class="container">
    <h2>Nuevo Estudiante</h2>
    <form action="index.php?menu=add" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nombre</label>
            <input name="Nombre" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input name="Apellido" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Carrera</label>
            <select name="Carrera" class="form-control">
                <option value="Redes">Redes</option>
                <option value="Software">Software</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Seguridad">Seguridad informática</option>
            </select>
        </div>
        <div class="form-group">
            <label>Materias Favoritas</label>
            <p>"(Separar con coma en caso de poner varias)"</p>
            <textarea class="form-control" name="Materias" rows="3"></textarea>
        </div>

        <div class="form-group form-check">
            <input name="Status" type="checkbox" class="form-check-input" checked hidden>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="index.php" class="btn btn-success">Inicio</a>
    </form>
</div>