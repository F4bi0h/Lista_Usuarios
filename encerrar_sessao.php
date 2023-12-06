<?php
    session_start();
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php');
?>