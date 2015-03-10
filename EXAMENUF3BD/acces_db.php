 <?php
    $host_db = "localhost"; // Host de la BD
    $usuari_db = "rootexamen"; // Usuari de la BD
    $pass_db = "bmxordie123"; // Contrasenya de la BD
    $name_db = "exuf3"; // Nom bd
    
    //conectem
    mysql_connect($host_db, $usuari_db, $pass_db);
    mysql_select_db($name_db);
?> 