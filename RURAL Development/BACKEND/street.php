<?php
$server = "localhost";
$username ="root";
$password = "pass";
$dbname = "streetl";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}


//start
$user_name = $_POST["user_name"];
$user_address = $_POST["user_address"];
$user_email = $_POST["user_email"];
$user_phone = $_POST["user_phone"];
$ward = $_POST["ward"];
$user_msg = $_POST["user_msg"];

$sql = "INSERT INTO `saver`(`user_name`, `user_address`, `user_email`, `user_phone`,`ward`,`user_msg`) VALUES
 ('$user_name','$user_address','$user_email','$user_phone','$ward','$user_msg')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo " data submitted";

}
else{
    echo "error";
}

header("Location: thankspage.html");
    exit;


?>