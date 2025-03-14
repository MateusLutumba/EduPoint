<?php
session_start();
    unset( $_SESSION['email']);
    unset( $_SESSION['passe']);
    header('Location: ../index.html');
?>