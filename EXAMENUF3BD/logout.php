<?php
    session_start();
    include('acces_db.php'); 
    
    if(isset($_SESSION['name'])) {
        session_destroy();
        header("Location: index.php");
    }else {
        echo "Operacio Incorrecta";
    }
?> 