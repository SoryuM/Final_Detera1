<?php

include 'connectdb.php';

function getAllVisitors(){
    $conn = Connect();
    $query = 'SELECT * FROM visitors';
    $result= $conn->query($query); //Executes query
    $data = [];

    while($row = $result->fetch_assoc()){
        $data[]=$row;
    }
    return $data;
}