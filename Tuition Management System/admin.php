<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: loginhtml.php');
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
                    <br><br><br><br>
                    <div class="col-lg-8">
                        <h3 class="heading" >Admin Notifications</h3>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-danger">Course registration session expired. </li>
                            <li class="list-group-item list-group-item-danger">Student and Teacher registration complete.</li>
                            <li class="list-group-item list-group-item-danger">Course Evaluation opened. </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3 > Statistical Information </h3> 
                        <img class="img-responsive" src="stats.jpg" alt="stats">
                    </div>>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<!--<table class="table table-bordered" style="background: antiquewhite;"  width="100%" border="1";>-->