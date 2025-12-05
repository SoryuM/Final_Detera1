<?php

include "connectdb.php";

    $data = $_POST['data'];

    $action = $_GET['action'];

    if($action==='register'){
        if (CreateUser($data)){
            header('location: ../index.html');
        }
    }
    else if($action==='login'){
        if ( GetUser($data['username'])){

            $user = GetUser($data['username']);

            if (password_verify($data['password'], $user['password_hash']))
            {
                session_start();

                $_SESSION = $user;

                header('location: ../dashboard.php');
            }
        }
    }
?>    