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

    $query = "SELECT * FROM users WHERE username = '$username'";

    $result = $conn->query($query);

    $data = $result->fetch_assoc();

    return $data;
}

function getAllVisitors(){
    $conn = Connect();
    $query = 'SELECT * FROM visitors';
    $result = $conn->query($query); //Executes query
    $data = [];

    while($row = $result->fetch_assoc()){
        $data[] = $row;   // FIXED
    }

    return $data;
}

function addVisitor($data) {
    $conn = Connect();

    $fName = $data['first_name'];
    $lName = $data['last_name'];
    $mName = $data['middle_name'];
    $contact = $data['contact'];
    $address = $data['address'];
    $location_type = $data['location_type'];
    $purpose = $data['purpose'];
    $date = date('Y-m-d');
    $time = date('h:-i A');

    $query = "INSERT INTO `visitors`
        (
            vis_fname,
            vis_lname,
            vis_mname,
            vis_contact,
            vis_address,
            location_type,
            visit_purpose,
            visit_date,
            visit_time
        )
        VALUES
        (
            '$fName',
            '$lName',
            '$mName',
            '$contact',
            '$address',
            '$location_type',
            '$purpose',
            '$date',
            '$time'
        )
    ";

    $result = $conn->query($query);

    return $result;
}

function countToday(){
    $conn = Connect();

    $today = date('Y-m-d');

    $query = "SELECT COUNT(*) as today_count FROM `visitors` WHERE visit_date = '$today'";

    $result = $conn->query($query);

    $count = $result->fetch_assoc();

    return $count['today_count'];
}

function countExam(){
    $conn = Connect();

    $query = "SELECT COUNT(*) as exam_count FROM `visitors` WHERE visit_purpose = 'Exam'";

    $result = $conn->query($query);

    $count = $result->fetch_assoc();

    return $count['exam_count'];
}

function countOthers(){
    $conn = Connect();

    $query = "SELECT COUNT(*) as others_count FROM `visitors` WHERE visit_purpose = 'Others'";

    $result = $conn->query($query);

    $count = $result->fetch_assoc();

    return $count['others_count'];
}

function countAttendance(){
    $conn = Connect();

    $query = "SELECT COUNT(*) as attendance_count FROM `visitors` WHERE visit_purpose = 'Attendance'";

    $result = $conn->query($query);

    $count = $result->fetch_assoc();

    return $count['attendance_count'];
}

function countInquiry(){
    $conn = Connect();

    $query = "SELECT COUNT(*) as inquiry_count FROM `visitors` WHERE visit_purpose = 'Inquiry'";

    $result = $conn->query($query);

    $count = $result->fetch_assoc();

    return $count['inquiry_count'];
}

?>
