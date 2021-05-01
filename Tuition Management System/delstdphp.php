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

    $table1 = "CREATE TABLE students(
    id int(6) PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(30),
    lastname varchar(30),
    email varchar(50),
    password varchar(30)
    )";
    mysqli_query($con,$table1);
    
    $email= filter_input(INPUT_POST ,'email');
    
    $studIdCheck = "select * from students where email = '$email'";
    
    $studexist = mysqli_query($con, $studIdCheck); 
    
    $num1 = mysqli_num_rows($studexist);
    if($num1==1){
         $sql = "DELETE from students where email = '$email'" ;           
         if(mysqli_query($con,$sql)) {
            die('Deleted data successfully');
         }else{
             echo "Error deleting record: " . mysqli_error($con);
             }
         }
    

   
mysqli_close($con);
?>