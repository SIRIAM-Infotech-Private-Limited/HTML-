<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$database = "user_info";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['save']))
{
$fname= $_POST['f_name'];
$lname = $_POST['l_name'];
$Email = $_POST['user_email'];
$Number = $_POST['user_number'];
$Address = $_POST['user_address'];
$Status = $_POST['user_status'];
$Age =$_POST['user_age'];
$query=mysqli_query($conn,"INSERT INTO `user_register`(`First_Name`, `Last_Name`, `Phone_Number`, `Age`, `Address`, `Maritial Status`, `Email`) VALUES ('$fname','$lname','$Number', '$Age','$Address','$Status','$Email')");
if($query)
{
    echo "<script>alert('User Added');</script>";
    
}
else{

}
}
?>

