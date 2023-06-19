<?php
 $lnameErr=$fnameErr = $emailErr = $genderErr = $categErr =$priceErr=$ratingErr=$phoneErr=$expErr=$addressErr= "";
 $fname=$lname = $email = $gender =$status=$phone="";
 $flag=0;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root');
    $valid=1;
mysqli_select_db($con,'mini-project');
function test_input($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(empty($_POST['fname']))
{
$fnameErr="Name is required.";
}
if(empty($_POST['lname']))
{
$lnameErr="Name is required.";
}
else
{
$fname= test_input($_POST['fname']);
$lname= test_input($_POST['lname']);
if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
$fnameErr = "Only letters and white space allowed.";
$valid=0;
}
if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
  $lnameErr = "Only letters and white space allowed.";
  $valid=0;
}
}
if(empty($_POST['email']))
{
$emailErr="Email is required.";
}else{
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format.";
$valid=0;
}
}
if(empty($_POST['radio']))
{
$genderErr="Gender is required.";
}
if(empty($_POST['address']))
{
$addressErr="Address is required.";
}
if(empty($_POST['experience']))
{
$expErr="Experience is required.";
}
if(empty($_POST['phone']))
{
$phoneErr="Phone number is required.";
}
else{
$phone=test_input($_POST['phone']);
if(!preg_match('/^[0-9]{10}+$/', $phone)) {
$phoneErr="Invalid phone number";
$valid=0;
}
}
if(empty($_POST['category']))
{
$categErr="This field may not be empty.";
}
if(empty($_POST['rating']))
{
$ratingErr="This field may not be empty.";
}  if(empty($_POST['price']))
{
$priceErr="This field may not be empty.";
}


if($valid==1 && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['radio']) && !empty($_POST['experience']) && !empty($_POST['phone']) && !empty($_POST['price']) && !empty($_POST['category']) && !empty($_POST['rating']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $experience=$_POST['experience'];
    $phone=$_POST['phone'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $rating=$_POST['rating'];
    $gender=$_POST['radio'];
    $sql="INSERT INTO workers (fname,lname,email,gender,homeaddress,experience,phone_no,category,rating,price) VALUES ('$fname','$lname','$email','$gender','$address','$experience','$phone','$category','$rating','$price') ";
    $query=$con->query($sql); 
    if($query)
    {
    $status="Successfully Completed";
    }
    else
    $status= "Error Occured";
}
}
?>