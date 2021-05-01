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
                <div class="heading">
                    <p>Register Here</p>
                </div>
                <br><br><br>
                <div class="col-lg-12">
                    <div class="input">
                        <form action="reg.php" method="POST" name="input">
                            <table style="width:70%" class="tab">
                                 <tr>
                                    <td>First Name</td> 
                                    <td><input type="text" class="ep" name="fname" placeholder ="First Name" oninvalid="this.setCustomValidity('Please Enter First Name')" oninput="setCustomValidity('')" required>
                                            <td><h3>Register as</h3></td>
                                </tr>
                                <tr>
                                    <td>Last Name</td> 
                                    <td><input type="text" class="ep" name="lname" placeholder ="Last Name" oninvalid="this.setCustomValidity('Please Enter Last Name')" oninput="setCustomValidity('')" required>
                                    <td><input type="radio"  name= "regas" value="Teacher" oninvalid="this.setCustomValidity('Please Enter First Name')" oninput="setCustomValidity('')" required> Teacher</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="email" class="ep"  name="email" placeholder ="Enter Email" oninvalid="this.setCustomValidity('Please Enter a Valid Email')" oninput="setCustomValidity('')" required>
                                    <td><input type="radio" name= "regas" value="Student" required> Student</td>

                                </tr>
                                <tr>
                                    <td>Password</td> 
                                    <td><input type="password" class="ep" name= "password" placeholder="Enter Password" oninvalid="this.setCustomValidity('Please Enter Password')" oninput="setCustomValidity('')" required>
                                    <td><input type="radio" name= "regas" value="Manager" required> Manager</td>

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