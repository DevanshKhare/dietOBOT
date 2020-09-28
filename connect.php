<?php
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];

$conn = new mysqli('localhost','root','','dietData');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into input(name,age,height,weight,gender,email) values(?,?,?,?,?,?)");
    $stmt->bind_param("siiiss",$name,$age,$height,$weight,$gender,$email);
    $stmt->execute();
    echo "Input Successful..!!";
    $stmt->close();
    $conn->close();
}
?>