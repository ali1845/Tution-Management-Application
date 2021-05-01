<?php
session_start();
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
                    <br><br>                      
                    <div class="center-block">
                        <h1 class="heading">Teacher Information</h1>
                    </div>
            
                                            
                    <div class="col-lg-6">

                        <div class="active">
                            <form style="background: #ffcccc;" action="admTecPhp.php" method="post" class="frm" name="input">
                        
                            <table style="width:100%" class="tab" >
                                <tr>
                                    <td colspan="3"><h2>Assign Course</h2></td>
                                </tr>
                                <tr>
                                    <td style="">Teacher's email</td>
                                    <td><input type="email" class="ep"  name="email" placeholder ="Enter Email" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="setCustomValidity('')" required></td>
                                </tr>
                                <tr>
                                    <td style="">Course Code</td> 
                                    <td><input type="text" class="ep" name= "Course_Code" placeholder="Enter Course Code"  oninvalid="this.setCustomValidity('Please enter course code')" oninput="setCustomValidity('')" required></td>                                   
                                </tr>
                                <tr>
                                    <td><td rowspan="2"><button type="submit"  class ="btn btn-primary">Assign</button></td></td>
                                </tr>
                             </table>
                        </form>
                        </div>
                    </div>
                    <div class = "container-fluid">
            <div class = "row">
                <div class = "col-lg-6">
                                        <div>
                        <h2 style="background: #ffcccc;">Courses</h2>
                    </div>
                    <div>
                        <table class="table table-bordered" style="background: antiquewhite;"  width="100%" border="1";>

                        <tr class="active">
                        <th>Department</th>
                        <th>Course Code</th>
                        <th>Section</th>
                        <th>Course Name</th>
                        <th>credit hrs</th>
                        <th>Days</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Seats</th>                        
                        </tr>
                        <tr>      
                        <?php
                        $count=1;
                        $sel_query="Select * from courses ORDER BY id;";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <td><?php echo $row["Department"]; ?></td>
                        <td><?php echo $row["Course_Code"]; ?></td>
                        <td><?php echo $row["Sec"]; ?></td>
                        <td><?php echo $row["Course_name"]; ?></td>
                        <td><?php echo $row["crdt_hrs"]; ?></td>
                        <td><?php echo $row["Days"]; ?></td>
                        <td><?php echo $row["Start"]; ?></td>
                        <td><?php echo $row["End"]; ?></td>
                        <td><?php echo $row["Seats"]; ?></td>
                        </tr>

                        <?php $count++; } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

                </div>
            </div>
        </div>
 
    </body>
</html>


<!--                   <div>
                        <h2>Courses</h2>
                    </div>
                    <div>
                        <table  width="100%" border="1";>

                        <tr class="active">
                        <th>Email</th>
                        <th>Course Code</th>

                        </tr>
                        <tr>      
                        
                            
                            
                                                   
                            <php
                        if ('true' == filter_input(INPUT_GET ,'exist')) { 
                            $email= filter_input(INPUT_POST ,'email');
                            $crsCd= filter_input(INPUT_POST ,'Course_Code');
                            $count=1;
                            $t= "SELECT teachers.email, courses.Course_Code from teachers, courses where teachers.email = '$email' && courses.Course_Code='$crsCd'";
                           $result = mysqli_query($con, $t);
                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){ ?>   
                                <td><php echo $row["email"]; ?></td>
                                <td><php echo $row["Course_Code"]; ?></td>

                                </tr>
                            <php $count++; }

                            }
                            
                            }?>
                            
                        </table>
                    </div>-->