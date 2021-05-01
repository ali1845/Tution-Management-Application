
+-*<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>jjj</title>
</head>
<body>
    

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
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    email varchar(50) NOT NULL,
    password varchar(30) NOT NULL
    )";
    mysqli_query($con,$table2);
    
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
    
    $fname= filter_input(INPUT_POST ,'fname');
    $lname= filter_input(INPUT_POST, 'lname');
    $email= filter_input(INPUT_POST, 'email');
    $passw= filter_input(INPUT_POST, 'password');
    $registerAs = filter_input(INPUT_POST, 'regas');
    
    if(isset($registerAs) && $registerAs=="Manager"){
        $manIdCheck = "select * from manager where email = '$email'";            
        $exist = mysqli_query($con, $manIdCheck); 
        $num = mysqli_num_rows($exist);
        if(!$num){ 
            $insert_val = "INSERT into manager(firstname, lastname, email, password) values ('$fname', '$lname', '$email', '$passw')";
            $ins = mysqli_query($con, $insert_val);
            header('Location: admin.php?login=true');

        }else{
            header('Location: reghtml.php?reg=false');
        }
    }
        
    if(isset($registerAs) && $registerAs=="Student"){
        $studIdCheck = "select * from students where email = '$email'";            
        $exist = mysqli_query($con, $studIdCheck); 
        $num = mysqli_num_rows($exist);
        if(!$num){ 
            $insert_val = "INSERT into students(firstname, lastname, email, password) values ('$fname', '$lname', '$email', '$passw')";
            $ins = mysqli_query($con, $insert_val);
            header('Location: admin.php?login=true');

        }else{
            header('Location: reghtml.php?reg=false');
        }
    }
    if(isset($registerAs) && $registerAs=="Teacher"){
        $teachIdCheck = "select * from teachers where email = '$email'";        
        $exist = mysqli_query($con, $teachIdCheck);
        $num = mysqli_num_rows($exist);
        if(!$num){ 
            $insert_val = "INSERT into teachers(firstname, lastname, email, password) values ('$fname', '$lname', '$email', '$passw')";
            $ins = mysqli_query($con, $insert_val);
            header('Location: admin.php?login=true');

        }else{
            header('Location: reghtml.php?reg=false');
        }
    }
?>
</body>
</html>