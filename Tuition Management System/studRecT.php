<?php
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
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-12">
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
                                    <a href="view student records">Delete</a>
                                    <a href="studRecT.php">View</a>
                                </div>
                             
                            </div> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>

<h2 >Student Records</h2>
<table width="100%" border="1";>

<tr>
<th>I.D</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Class</th>
<th>Fee</th>

</tr>

<?php
$count=1;
$sel_query="Select * from studentRec ORDER BY id;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["FirstName"]; ?></td>
<td><?php echo $row["LastName"]; ?></td>
<td><?php echo $row["Class"]; ?></td>
<td><?php echo $row["Fee"]; ?></td>


</td>
</tr>
<?php $count++; } ?>
</table>
</div>
</body>
</html>
