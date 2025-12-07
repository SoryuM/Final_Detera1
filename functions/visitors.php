<?php

include 'connectdb.php';

$visitor = $_POST['visitor'];

if (addVisitor($visitor)){
    header('location: ../dashboard.php');
}

?>

