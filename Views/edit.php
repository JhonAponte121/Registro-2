<h2>Editando al estudiante,matricula #<?php echo $_GET['matricula'] ?></h2>
<form action="index.php?menu=edit&matricula=<?php echo $_GET['matricula'] ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nombre</label>
        <input name="Nombre" type="text" class="form-control" value='<?php echo $estudiante->Nombre ?>'>
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input name="Apellido" type="text" class="form-control" value='<?php echo $estudiante->Apellido ?>'>
    </div>
    <div class="form-group">
        <label>Carrera</label>
        <select name="Carrera" class="form-control">
            <option value="Redes">Redes</option>
            <option value="Software">Software</option>
            <option value="Multimedia">Multimedia</option>
            <option value="Seguridad informática">Seguridad informática</option>
        </select>
    </div>
    <div class="form-group">
        <label>Materias Favoritas</label>
        <textarea class="form-control" name="Materias" rows="3"><?php echo $estudiante->Materias ?></textarea>
    </div>
    <div class="form-group">
        <label>Foto de perfil</label>
        <input name="foto" size="30" type="file" class="form-control">
    </div>
    <div class="form-group form-check">
        <input name="Status" type="checkbox" class="form-check-input">
        <label>Estado</label>
    </div>
    <button type="submit" class="btn btn-outline-warning">Guardar cambios</button>|
    <a href="index.php?menu=view&matricula=<?php echo $_GET['matricula']; ?>" class="btn btn-outline-primary">Regresar a resumen</a>|
    <a href="index.php?menu=delete&matricula=<?php echo $_GET['matricula']; ?>" class="btn btn-outline-danger">Delete</a>|
    <a href="index.php" class="btn btn-outline-success">Regresar a inicio</a>
</form>