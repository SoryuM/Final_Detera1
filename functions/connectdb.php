<?php

const HOST = 'localhost'; //Server's IP or localhost
const USER = 'root'; //DB User ex root
const PWD = '';
const DBNAME ='detera_final';

function Connect(){
    $conn = new mysqli(HOST, USER, PWD,DBNAME);
    if($conn->connect_error){
        die('Error Connection');
        exit;
    }
    return $conn;

}

function CreateUser($data){
    $conn = Connect();

    $username = $data['username'];
    $role = $data['role'];
    $first_name = $data['first_name'];
    $middle_name = $data['middle_name'];
    $last_name = $data['last_name'];
    $contact = $data['contact'];
    $password_hash = password_hash($data['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO `users`
         (
             user_role,
             username,
             password_hash,
             first_name,
             middle_name,
             last_name,
             contact
            
        )
        VALUES
        (
            '$role',
            '$username',
            '$password_hash',
            '$first_name',
            '$middle_name',
            '$last_name',
            '$contact'
        )
    ";

    $result = $conn->query($query);

    return $result;
}

    function GetUser($username)
    {
        $conn = Connect();

        $query = "SELECT  * FROM users WHERE username = '$username'";

        
        $result = $conn->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }
?>