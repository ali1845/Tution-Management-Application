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

            <div class = "col-lg-12">
                <div class="">
                    <h1 class="text-center ">Welcome Student! <?php echo $_SESSION['email'];?></h1>
                </div>
                    <nav class="navbar navbar-default">
                        <div class="nav">
                            <ul>                            
                                <li style="float:right;"><a href="logout.php">LOGOUT</a></li>
                                <li ><a href="StudentViewPage.php">HOME</a></li>
                                <li ><a href="studPerView.php">PERFORMANCE</a></li>
                                <li ><a href="studentSchedView.php">SCHEDULE</a></li>
                                <li ><a href="crsReg.php">COURSE REGISTRATION</a></li>
                            </ul>
                        </div> 
                    </nav>
            </div>
            <div class="col-lg-10">
                <h2>Student Performance</h2>
                <table class="table table-bordered" style="background: antiquewhite;"  width="100%" border="1";>

                    <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Grade</th>


                    </tr>

                    <?php
                    $count=1;
                    $sel_query="Select * from studentperformance ORDER BY id;";
                    $result = mysqli_query($con,$sel_query);
                    while($row = mysqli_fetch_assoc($result)) { ?>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["Subject"]; ?></td>
                    <td><?php echo $row["Teacher"]; ?></td>
                    <td><?php echo $row["Grade"]; ?></td>



                    </td>
                    </tr>
                    <?php $count++; } ?>
                </table>
            </div>
        </div>
    </body>
</html>
