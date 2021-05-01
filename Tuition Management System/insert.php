<?php
 $con = mysqli_connect("localhost", "root", "");
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con)); 
     }else{
         echo "Connected database";
     }
$db_select = mysqli_select_db($con,"tuition");
        if(!$db_select){
            die('Cannot use test_db: ' . mysqli_error($db_select));               
        } else {
        echo "Selected data base";
        }
$table3 = "CREATE TABLE update_students(
            id int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
            firstname varchar(30) NOT NULL,
            lastname varchar(30) NOT NULL,
            email varchar(50) NOT NULL,
            )";
 mysqli_query($con,$table3);
$sql = "SELECT id, firstname, lastname, email FROM update_students";
$result = mysqli_query($con, $sql);
        
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $ins_query="insert into update_students
    (`firstname`,`lastname`,`email)values
    ('$firstname','$lastname','$email')";
    mysqli_query($con,$ins_query);
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="lastname" placeholder="Enter Lastname" required /></p>
<p><input type="text" name="email" placeholder="Enter Email" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
</body>
</html>