<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <style>
        

        body {
            background-image: url('img/back.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: 100% 100%;
        }
    </style>
    <body>
        <?php
        $nombre=$_REQUEST['nombre'];
        $nombre2=$_REQUEST['nombre2'];
        $appat=$_REQUEST['appat'];
        $apmat=$_REQUEST['apmat'];
        $age=$_REQUEST['age'];
        $tel=$_REQUEST['tel'];
        $sexo=$_REQUEST['Sexo'];

        $archivo=fopen("datos.txt","a")or die ("Problema al crear el archivo");
        fputs($archivo,"El Primer Nombre es:".$nombre.PHP_EOL);
        fputs($archivo,"El Segundo Nombre es:".$nombre2.PHP_EOL);
        fputs($archivo,"El Apellido Paterno es:".$appat.PHP_EOL);
        fputs($archivo,"El Apellidp Materno es:".$apmat.PHP_EOL);
        fputs($archivo,"La Edad  es:".$age.PHP_EOL);
        fputs($archivo,"El Teléfono es:".$tel.PHP_EOL);
        fputs($archivo,"El Sexo es:".$sexo.PHP_EOL);
        fclose($archivo);
        
        echo"<table border='1';
        font-size: 20;>";
        echo"<tr>";
        echo"<td>Primer Nombre:</td>";
        echo"<td>".$nombre."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>Segundo Nombre:</td>";
        echo"<td>".$nombre2."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>Apellido Paterno:</td>";
        echo"<td>".$appat."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>Apellido Materno:</td>";
        echo"<td>".$apmat."</td>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>Edad:</td>";
        echo"<td>".$age."</td>";
        echo"</tr>";
        echo"<td>Telefono:</td>";
        echo"<td>".$tel."</td>";
        echo"</tr>";
        echo"<td>Sexo:</td>";
        echo"<td>".$sexo."</td>";
        echo"</tr>";
        echo"</table>";
        ?>
    </body>
</html>