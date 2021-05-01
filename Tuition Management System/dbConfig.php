<?php

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "BabaOfKashmir";

$con = new mysqli($dbHost, $dbUsername, $dbPassword);
if($con->connect_error){
    die("Could not Connect:" .$con->connect_error());
}

$sqlDB = "CREATE DATABASE ngLoanDB";
if($con->query($sqlDB)===TRUE){
    echo "DB created successfully";
}else{
    echo "Error in  creating DB";
}

$sqlTable = "CREATE TABLE applicants(
    id INT(6) PRIMARY KEY,
    cnic INT(13),
    phone INT(10),
    income INT(6),
    age INT(3),
    passimage VARCHAR(50),
    cnicimage VARCHAR(50),
    doc VARCHAR(50),
    doc1 VARCHAR(50),
    doc2 VARCHAR(50),
    doc3 VARCHAR(50),
    doc4 VARCHAR(50)

)";


$con->close();

?>