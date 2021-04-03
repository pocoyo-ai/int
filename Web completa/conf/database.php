<?php

    $link = mysqli_connect("localhost","Macrosoft","prueba","macrosoft");
    if (!$link)
    {
        echo "MySQL Error: No se ha conectado" . mysqli_connect_error();
    }


?>