<?php
//llamar el archivo de la conexion  de  la base de datos 
include "db.php";
//llama la inf de  la db
$consulta =  "SELECT * FROM chat ORDER BY id DESC";
$ejecutar = $conexion->query($consulta);
while($fila = $ejecutar->fetch_array()):
?>

<div id="datos-chat">
    <span style="color:aqua" ><?php echo $fila['nombre']; ?></span>
    <span style="color:gray"><?php echo $fila['mensaje']; ?></span>
    <span style="float:right; " ><?php echo formatearFecha($fila['fecha']); ?></span>
</div>
<?php
    endwhile;
?>