

<?php

// Include the database configuration file

include 'dbConfig.php';

// define variables and set to empty values
$nameErr = "";
$name = $cnic = $phone = $income = $age = $passimage = $cnicimage = $doc = $doc1 = $doc2 = $doc3 = $doc4 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
    }

    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    {
      $error = 'Invalid Number!';
    }
    $phone = test_input($_POST["phone"]);
    $cnic = test_input($_POST["cnic"]);
    $income = test_input($_POST["income"]);
    $age = test_input($_POST["age"]);
    $passimage = test_input($_POST["passimage"]);
    $cnicimage = test_input($_POST["cnicimage"]);
    $doc = test_input($_POST["doc"]);
    $doc1 = test_input($_POST["doc1"]);
    $doc2 = test_input($_POST["doc2"]);
    $doc3 = test_input($_POST["doc3"]);
    $doc4 = test_input($_POST["doc4"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>

