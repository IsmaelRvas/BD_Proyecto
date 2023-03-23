<?php 
        include ('conexion.php');
        $sql = "SELECT * from USUARIOS where NOMBRECORTO ='". $_REQUEST['name']."' and PASSWORD='".$_REQUEST['clave']."';";
        foreach ($conn->query($sql) as $row) {
            echo " Has iniciado sesión como ". $row['NOMBRECORTO']. " y tu rol es:  ".$row['ROLE'];
            echo "<br>";}
?>
