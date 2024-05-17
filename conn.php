<?php 
$name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


 $conn = new mysqli('localhost','root','','yash');
if ($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error );
} else {
    $stmt=$conn->prepare("insert into reg (name,gender,phone,email,address,qualification,password,cpassword) values (?,?,?,?,?,?,?,?)");

            $stmt->bind_param("ssisssii",$name,$gender,$email,$qualification,$password,$phone,$cpassword,$address);
            $stmt->execute();
            echo "registration successfully...";
            $stmt->close();
            $conn->close();
}