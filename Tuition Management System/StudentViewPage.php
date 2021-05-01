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

                                </div> 
                            </ul>
                    </nav>
                </div>
                <div class="col-lg-10">
                    <section>
                        <article>
                            <h3>Notifications</h3>
                            <ol> 
                            <li> The Datesheet For Exams Has Been Updated On The Website. </li> <br>
                            <li> The last date for course registration is 28th january.</li> <br>
                            <li> Tax certificates can be collected from the accounts office. </li> 
                            </ol>
                            <h3>  </h3> 
                            <img src="time.jpg" alt="time">
                          </article>
                        </section>               
                    </div>
                </div>
            </div>
    </body>
</html>
