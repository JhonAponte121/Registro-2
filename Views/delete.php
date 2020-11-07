
<h2>Confirmar eliminacion porfavor, si no es asi vuelva a inicio. </h2>
<form action="index.php?menu=delete" method="POST">
    <input type="text" value='<?php echo $_GET['matricula'] ?>' name="id" hidden>
    <a href="index.php" class="btn btn-success">Inicio</a>
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>