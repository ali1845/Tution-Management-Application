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
    <html>
   <body>
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-lg-12">
                    <div class="">
                        <h1 class="text-center ">Welcome Admin! <?php echo $_SESSION['email'];?></h1>
                    </div>                    
                    <div class="nav">
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
        `                               <a href="admTec.php">Teachers</a> 
                                        <a href="adStdInfo.php">Students</a>
                                        <a href="staffView.php">Staff</a>
                                        </div>
                                    </div> 
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div>
                    <p class="heading" >Add Course</p>
                </div>
                <br><br><br>
                <div class="col-lg-12">
                    <div class="input">
                        <form action="addCorsephp.php" method="POST" name="input">
                            <table style="width:50%;" class="tab center-block">

                                <tr>
                                    <td>Department</td> 
                                    <td><input type="text" class="ep" name="dpt" placeholder ="Department" oninvalid="this.setCustomValidity('Please Enter the Department')" oninput="setCustomValidity('')" required>                                    
                                </tr>
                                <tr>
                                    <td>Course Code</td>
                                    <td><input type="text" class="ep"  name="crsCd" placeholder ="Enter Course Code" oninvalid="this.setCustomValidity('Please Enter Course Code')" oninput="setCustomValidity('')" required>
                                </tr>
                                <tr>
                                    <td>Section</td> 
                                    <td><input type="text" class="ep" name= "sec" placeholder="Enter Section" oninvalid="this.setCustomValidity('Please Enter Section')" oninput="setCustomValidity('')" required>
                                </tr>
                                <tr>
                                    <td>Course Name</td> 
                                    <td><input type="text" class="ep" name= "crsNm" placeholder="Enter Course name" oninvalid="this.setCustomValidity('Please Enter Course Name')" oninput="setCustomValidity('')" required>
                                </tr>
                                <tr>
                                    <td>Credit hrs</td> 
                                    <td><input type="number" style="width: 60%" class="ep" name= "crdtHrs" min="1" max="4" placeholder="Crdt hrs" oninvalid="this.setCustomValidity('Please Enter Credit hrs')" oninput="setCustomValidity('')" required>
                                </tr>

                                <tr>
                                    <td>Days</td>
                                    <td> <select style="width: 60%" name="Days">
                                            <option value="MWF">MWF</option>
                                            <option value="TR">TR</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Start</td> 
                                    <td><input type="time" style="width: 60%" class="ep" name= "Start" min="15:00" max="20:00" placeholder="Enter Start Time" oninvalid="this.setCustomValidity('Please Enter Start Time')" oninput="setCustomValidity('')" required>
                                </tr>
                                <tr>
                                    <td>End</td> 
                                    <td><input type="time" style="width: 60%" class="ep" name= "End" min="15:00" max="20:00" placeholder="Enter End Time" oninvalid="this.setCustomValidity('Please Enter End Time')" oninput="setCustomValidity('')" required>
                                </tr>
                                <tr>
                                    <td>Seats</td> 
                                    <td><input type="number" style="width: 60%" class="ep" name= "Seats" min="5" max="10" placeholder="Enter Seats" oninvalid="this.setCustomValidity('Please Enter Seats')" oninput="setCustomValidity('')" required>
                                </tr>
                            </table> 
                            <br><br><input type="submit" name="submitbutton" class ="btn btn-primary" value="Sign Up">    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<?php
    if ('false' == filter_input(INPUT_GET ,'reg')) {
        echo "<script type='text/javascript'>alert(' Try another one!')</script>";
    }

    ?>
       
    </body>
</html>