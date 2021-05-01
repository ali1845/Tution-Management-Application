<!DOCTYPE html>

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
        Seats varchar(30)
        )";
        mysqli_query($con,$crsTable);
        
 
        $dpt= filter_input(INPUT_POST ,'dpt');
        $crsCd= filter_input(INPUT_POST, 'crsCd');
        $sec= filter_input(INPUT_POST, 'sec');
        $crsNm= filter_input(INPUT_POST, 'crsNm');
        $crdtHrs = filter_input(INPUT_POST, 'crdtHrs');
        $Days= filter_input(INPUT_POST, 'Days');
        $Start= filter_input(INPUT_POST, 'Start');
        $End= filter_input(INPUT_POST, 'End');
        $Seats = filter_input(INPUT_POST, 'Seats');
        
        $manIdCheck = "select * from courses where Department = '$dpt' && Course_Code ='$crsCd' && Sec = '$sec' ";
        $exist = mysqli_query($con, $manIdCheck); 
        $num = mysqli_num_rows($exist);
        if(!$num){ 
            $insert_val = "INSERT into courses(Department, Course_Code, Sec, Course_name, crdt_hrs, Days, Start, End, Seats) values ('$dpt', '$crsCd', '$sec', '$crsNm','$crdtHrs', '$Days', '$Start', '$End', '$Seats')";
            $ins = mysqli_query($con, $insert_val);
            header('Location: admin.php?login=true');

        }else{
            header('Location: reghtml.php?reg=false');
        }                
        
        ?>