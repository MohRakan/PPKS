<?php
    session_destroy();

        echo 'You have successfully logged out.';
        
    header("Location: login.php");
    exit;
?>