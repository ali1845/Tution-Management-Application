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
                        <h1 class="text-center ">Welcome Teacher! <?php echo $_SESSION['email'];?></h1>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="nav">
                            <ul>                            
                                <li style="float:right;"><a href="logout.php">LOGOUT</a></li>
                                <li><a href="teacherViewPage.php">HOME</a></li>
                                <li><a href="teacherSchedView.php">SCHEDULE</a></li>
                                <li><a href="evaluation.php">EVALUATION</a></li>
                                <div class="dropdown">
                                    <button class="dropbtn">Student Record 
                                    <i class="fa fa-caret-down"></i>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="updateStudent.php">Update</a>
                                        <a href="delStd.php">Delete</a>
                                        <a href="studRec.php">View</a>
                                    </div>
                                </div> 
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
    <br><br><br><br><br>
    <div class = "col-lg-10">
        <div class="input">
            <form action="studRecphp.php" class="frm" method="post">
                <table style="width:80%" class="tab" >
                   <tr>
                       <td colspan="3"><h2>Enter Student record</h2></td>
                   </tr>
                   <tr>
                       <td style="text-align:center;">Enter First Name:</td>
                       <td><input type="text" class="ep"  name="firstname" placeholder ="Enter First Name" oninvalid="this.setCustomValidity('Please enter a valid First Name')" oninput="setCustomValidity('')" required></td>
                   </tr>
                   <tr>
                       <td style="text-align:center;">Enter Last Name:</td>
                       <td><input type="text" class="ep"  name="lastname" placeholder ="Enter Last Name" oninvalid="this.setCustomValidity('Please enter a valid Last Name')" oninput="setCustomValidity('')" required></td>
                   </tr>
                   <tr>
                       <td style="text-align:center;">Enter Class Name:</td>
                       <td><input type="text" class="ep"  name="Class" placeholder ="Enter Class" oninvalid="this.setCustomValidity('Please enter a valid Class')" oninput="setCustomValidity('')" required></td>
                   </tr>
                   <tr>
                       <td style="text-align:center;">Enter Fee:</td>
                       <td><input type="text" class="ep"  name="Fee" placeholder ="Enter Fee" oninvalid="this.setCustomValidity('Please enter a valid Fee')" oninput="setCustomValidity('')" required></td>
                   </tr>       
                   <tr>
                       <td style="text-align:center;">Enter Grade:</td>
                       <td><input type="text" class="ep"  name="Grade" placeholder ="Enter Grade" oninvalid="this.setCustomValidity('Please enter a valid Grade')" oninput="setCustomValidity('')" required></td>
                       <td><button type="submit" name="update" style="float: center;" value="Update Data" class ="btn btn-primary">Update</button></td>
                   </tr>
               </table>

          </form>
       </div>
    </div>
    <br><br><br>
    <div class="col-lg-10">
        <h2>Students</h2>
                <table class="table table-bordered" style="background: antiquewhite;"  width="100%" border="1";>
                    <tr>
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

    </body>


</html>