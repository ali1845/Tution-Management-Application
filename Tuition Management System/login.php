<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>jjj</title>
</head>
<body>
<?php
session_start();
        $fname= filter_input(INPUT_POST ,'fname');
        $lname= filter_input(INPUT_POST, 'lname');
        $registerAs = filter_input(INPUT_POST, 'regas'); 
        $email= filter_input(INPUT_POST, 'email');
        $passw= filter_input(INPUT_POST, 'password');

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
        $table0 = "CREATE TABLE manager(
        id int(6) PRIMARY KEY AUTO_INCREMENT,
        firstname varchar(30),
        lastname varchar(30),
        email varchar(50),
        password varchar(30)
        )";
        mysqli_query($con,$table0);
        
        $table1 = "CREATE TABLE students(
        id int(6) PRIMARY KEY AUTO_INCREMENT,
        firstname varchar(30),
        lastname varchar(30),
        email varchar(50),
        password varchar(30)
        )";
        mysqli_query($con,$table1);

        $table2 = "CREATE TABLE teachers(
        id int(6) PRIMARY KEY AUTO_INCREMENT,
        firstname varchar(30),
        lastname varchar(30),
        email varchar(50),
        password varchar(30)
        )";
        mysqli_query($con,$table2);
        
        $studIdCheck = "select * from students where email = '$email' && password = '$passw'";            
        $teachIdCheck = "select * from teachers where email = '$email' && password = '$passw'";
        $managerCheck = "Select * from manager where email = '$email' && password = '$passw'";
        
        $studexist = mysqli_query($con, $studIdCheck); 
        $teachexist = mysqli_query($con, $teachIdCheck); 
        $managerexist = mysqli_query($con, $managerCheck); 
        
        $num0 = mysqli_num_rows($managerexist);
        $num1 = mysqli_num_rows($studexist);
        $num2 = mysqli_num_rows($teachexist);
        
        if($email == ('admin@gmail.com') && $passw == ('123')){
            $_SESSION['email']=$email;
            $_SESSION['password']=$passw;
            header('Location: admin.php?login=true');
        }else{
            if($num0==1){
                $_SESSION['email'] = $email;
                header('Location: ManagerViewPage.php?login=true');
            }
            elseif($num2==1){
                $_SESSION['email']=$email;
                header('Location: teacherViewPage.php?login=true'); 
            }
            elseif($num1==1){
                $_SESSION['email']=$email;
                header('Location: StudentViewPage.php?login=true'); 
            }
            else{
            header('Location: loginhtml.php?log=false');
            }
        }
        
    ?>
    </body>
</html>