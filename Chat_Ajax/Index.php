<?php
//llamar el archivo de la conexion  de  la base de datos 
    include "db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat PHP, MYSQL Y AJAX </title>
    <link rel="stylesheet" href="Styles.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">

<script type="text/javascript">
    function ajax(){
        var req = new XMLHttpRequest();

        req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200) {
                document.getElementById('chat').innerHTML = req.responseText;            
            }
        }

        req.open('GET',  'chat.php', true);
        req.send();
    }
    //Refresh de Pag
    setInterval(function(){ajax();}, 1000);


</script>


</head>
<body onload="ajax();" >
    <div id="contenedor">
        <div id="caja-chat" >
            <div id="chat" >
            <!--chat-->
            </div>
        </div>
        <form action="Index.php" method="POST" >
            <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu Nombre">
            <textarea name="mensaje" id="mensaje" placeholder="Ingresa tu Mensaje" cols="30" rows="10"></textarea>
            <input type="submit" name="enviar" value="enviar" >
        </form>
        <?php
            if (isset($_POST['enviar'])) {
                $nombre = $_POST['nombre'];
                $mensaje = $_POST['mensaje'];

                $consulta =  " INSERT INTO chat (nombre, mensaje) values ('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                
            }

                
        ?>
    </div>     
</body>
</html>