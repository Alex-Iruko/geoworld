<?php
    require_once('inc\manager-db.php');
    if (isset($_POST['login']) && isset($_POST['pwd']) && !empty($_POST['login']) && !
        empty($_POST['login'])) {
        $result = getAuthentification($_POST['login'], $_POST['pwd']);
        print_r($result);
        if ($result) {
            session_start();
            $_SESSION['nom'] = $result->nom;
            $_SESSION['role'] = $result->role;
            header('location: index.php?continent=$continent->Continent');
        } 
        else {
            header('location: login.php');
        }
    }
    else {
        header('location: login.php');
    }
?>