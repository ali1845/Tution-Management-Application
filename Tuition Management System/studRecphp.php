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
    $rectable = "CREATE TABLE studentRec(
    id int(6) PRIMARY KEY AUTO_INCREMENT,
    firstname varchar(30) NOT NULL,
    lastname varchar(30) NOT NULL,
    Class varchar(50) NOT NULL,
    Fee varchar(30) NOT NULL,
    Grade varchar(30) NOT NULL
    )";

    mysqli_query($con,$rectable);
    
    $FirstName= filter_input(INPUT_POST ,'firstname');
    $LastName= filter_input(INPUT_POST, 'lastname');
    $Class= filter_input(INPUT_POST, 'Class');
    $Fee= filter_input(INPUT_POST, 'Fee');
    $Grade = filter_input(INPUT_POST, 'Grade');
   
    $studCheck = "select * from studentRec where firstName = '$FirstName' && Class = '$Class' ";
    $exist = mysqli_query($con, $studCheck); 
    $num = mysqli_num_rows($exist);
    if(!$num){ 
        $insert_val = "INSERT into studentRec(firstName, lastName, Class, Fee, Grade) values ('$FirstName', '$LastName', '$Class', '$Fee','$Grade')";
        $ins = mysqli_query($con, $insert_val);
        header('Location: updateStudent.php?exist=true');
       }
       
   mysqli_close($con);



?>


     
   
   
   
          $query = "UPDATE studentrec SET firstName = '$FirstName', lastName = '$LastName', Class = '$Class', Fee='$Fee', Grade = '$Grade'";

       $result = mysqli_query($con, $query1);
