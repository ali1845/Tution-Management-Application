<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con)); 
        }else{
            echo "Connected database";
        }
    $create= "CREATE DATABASE tuition";
    if(mysqli_query($con, $create)){
        echo "Created data base";
    }
    $db_select = mysqli_select_db($con,"tuition");
    if(!$db_select){
        die('Cannot use test_db: ' . mysqli_error($db_select));               
    } else {
    echo "Selected data base";
    }

$teachTable = "CREATE TABLE teachers(
    tech_id int(6) PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(30),
    lastname varchar(30),
    email varchar(50),
    password varchar(30)
    )";
    mysqli_query($con,$teachTable);
    
$crsTable = "CREATE TABLE courses(
    id int(6) PRIMARY KEY AUTO_INCREMENT,
    Department varchar(30),
    Course_Code varchar(50),
    Sec varchar(30),
    Course_name varchar(30),
    crdt_hrs varchar(30),
    Days varchar(30),
    Start varchar(30),
    End varchar(30),
    Seats varchar(30),
    )";
    mysqli_query($con,$crsTable);
    
    

    
    $email= filter_input(INPUT_POST ,'email');
    $crsCd= filter_input(INPUT_POST ,'Course_Code');    
    
    $t= "SELECT * from teachers where email = '$email'";
    $c = "SELECT * from  where Course_Code = '$crsCd'";
    if($t==0 && $c==0){
        header('Location: admTec.php?exist=true');
    }        
    
    
?>





