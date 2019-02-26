<?php


// Desctruction de la lsession
session_destroy();

// Redirection de l'utilisateur
header("location: register.php");
exit;