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
                <div  class = "col-lg-12">
                    <div class="center-block">
                        <h1>Welcome to our Tuition</h1>
                    </div>
                    <div class="input">
                        
                        <form action="login.php" method="post" class="frm" name="input">
                        
                            <table style="width:100%" class="tab" >
                                <tr>
                                    <td colspan="3"><h2>Login here</h2></td>
                                </tr>
                                <tr>
                                    <td style="">Email</td>
                                    <td><input type="email" class="ep"  name="email" placeholder ="Enter Email" oninvalid="this.setCustomValidity('Please enter a valid email')" oninput="setCustomValidity('')" required></td>
                                    <td rowspan="2"><button type="submit"  class ="btn btn-primary">Login</button><br>or<br> <a href="mailto:19-11108@formanite.fccolege.edu.pk" class="ref">Contact us</a></td>
                                </tr>
                                <tr>
                                    <td style="">Password</td> 
                                    <td><input type="password" class="ep" name= "password" placeholder="Enter Password"  oninvalid="this.setCustomValidity('Please enter password')" oninput="setCustomValidity('')" required></td>
                                   
                                </tr>
                                
                             </table>
                        </form>
                    </div>

                </div>
            </div>
        </div>
<?php
    if ('false' == filter_input(INPUT_GET ,'log')) {
        echo "<script type='text/javascript'>alert('Invalid email or Not Registered!')</script>";
    }
    ?>    
    </body>
</html>