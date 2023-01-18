<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
        <title>Datos Guardados</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <style>
         /* Background: */
         body {
             background-image: url('img/back.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: 100% 100%;
        }
        /* sitio de escritorio: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* Para mobile: */
  [class*="col-"] {
    width: 100%;
  }
}
        </style>
    <body>
        <?php
        $archivo=fopen('Datos.txt',"r")or die("Problemas al leer el archivo");
        echo "<table border='3'>";
        while(!feof($archivo)){
            $linea=fgets($archivo);
            $lineaSalto=nl2br($linea);
            echo "<tr>";
            echo "<td>".$lineaSalto."</td>";
            echo "</tr>";
        }
        echo "</table>";
        fclose($archivo);
        ?>
    </body>
</html>