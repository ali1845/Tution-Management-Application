<?php
 $con = mysqli_connect("localhost", "root", "");
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con)); 
     }else{
         echo "Connected database";
     }
$db_select = mysqli_select_db($con,"tuition");
        if(!$db_select){
            die('Could not connect: ' . mysqli_error($db_select));               
        } else {
        echo "Selected data base";
        }
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Courses</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel = "StyleSheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
    <script type="text/javascript" src="index.js"></script>

</head>
    <body>
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-lg-6">
                    <div>
                        <h2>Courses</h2>
                    </div>
                    <div>
                        <table width="50%" border="1";>

                        <tr>
                        <th>Session</th>
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

                        <?php
                        $count=1;
                        $sel_query="Select * from students ORDER BY id;";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <td><?php echo $row["Session"]; ?></td>
                        <td><?php echo $row["Department"]; ?></td>
                        <td><?php echo $row["Course_Code"]; ?></td>
                        <td><?php echo $row["Sec"]; ?></td>
                        <td><?php echo $row["Course_name"]; ?></td>
                        <td><?php echo $row["crdt_hrs"]; ?></td>
                        <td><?php echo $row["Days"]; ?></td>
                        <td><?php echo $row["Start"]; ?></td>
                        <td><?php echo $row["End"]; ?></td>
                        <td><?php echo $row["Seats"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        
                        </td>
                        </tr>
                        <?php $count++; } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>