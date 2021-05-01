<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: loginhtml.php');
}
if(!isset($_SESSION['email'])){
    header('Location: loginhtml.php');
}

 
    $con = mysqli_connect("localhost", "root", "");
 
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con)); 
        }

     $db_select = mysqli_select_db($con,"tuition");
    if(!$db_select){
        die('Could not connect: ' . mysqli_error($db_select));               
    }
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login here</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "StyleSheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
    <script type="text/javascript" src="index.js"></script>

</head>
    <body>
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-lg-12">
                    <div class="">
                        <h1 class="text-center ">Welcome Admin! <?php echo $_SESSION['email'];?></h1>
                    </div> 
                    <nav class="navbar navbar-default">
                        <div class="nav">
                            <ul>
                                <li><a href="admin.php">Home</a></li>
                                <li><a href="reghtml.php">Register here</a></li>
                                <li style="float:right;"><a href="logout.php">LOGOUT</a></li>
                                <li><a href="addCrshtml.php">Courses</a></li> 
                                <div class="dropdown">
                                    <button class="dropbtn">Members 
                                    <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="admTec.php">Teachers</a> 

                                        <a href="adStdInfo.php">Students</a>
                                        <a href="staffView.php">Staff</a>
                                    </div>
                                </div> 
                            </ul>
                    </div>
                    </nav>
                    <br><br><br><br><br>
                    </div>
                
                <div class="col-lg-8">
                
                    <h2>Student Record</h2>
                <table class="table table-bordered" style="background: antiquewhite;"  width="100%" border="1";>
                    <tr class="active">
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Class</th>
                    <th>Fee</th>
                    <th>Grade</th>
                    </tr>

                    <tr>    
                    <?php
                    $count=1;
                    $sel_query="Select * from studentRec ORDER BY id;";
                    $result = mysqli_query($con,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["Class"]; ?></td>
                    <td><?php echo $row["Fee"]; ?></td>
                    <td><?php echo $row["Grade"]; ?></td>
                    </tr>
                    <?php $count++; } ?>
                </table>
                </div>
             </div>
            </div>
    </body>
</html>
