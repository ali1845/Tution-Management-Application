<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: loginhtml.php');
}
?>
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
                    <br><br><br><br><br>
                    </div>
                    <div class = "col-lg-12">
                        <div class="input">
                            <form action="delstdphp.php" class="frm" method="post">                    
                                <table style="width:100%" class="tab" >
                                <tr>
                                    <td class="heading"><h2>Delete Student record</h2></td>
                                </tr>
                                   <tr>
                                       <td style="text-align:center;" class="heading">Student Email:</td>
                                      <td><input type="email" class="ep"  name="email" placeholder ="Enter email" oninvalid="this.setCustomValidity('Please enter a valid Email')" oninput="setCustomValidity('')" required></td>
                                      
                                   </tr>
                                   <tr>
                                       <td rowspan="2"><button type="submit"  class ="btn btn-primary">Delete</button></td>
                                   </tr>
                                </table>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
       