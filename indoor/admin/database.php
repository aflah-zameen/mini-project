<?php
 $lnameErr=$fnameErr = $emailErr = $genderErr = $qualErr =$salaryErr=$posErr=$phoneErr=$typeErr=$addressErr= $passwordErr="";
 $fname=$lname = $email = $gender =$status=$phone="";
 $flag=0;
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
  $valid=1;
    $con=mysqli_connect('localhost','root');
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
if(empty($_POST['password']))
{
  $passwordErr="Password is required";
}
else{
  $password=test_input($_POST['password']);
  if(strlen($password)<8)
  {
    $passwordErr="atleast 8 characters in length";
    $valid=0;

  }
  if(strlen($password)>16)
  {
    $passwordErr="long password";
    $valid=0;

  }
  $number    = preg_match('@[0-9]@', $password);
  $uppercase = preg_match('@[A-Z]@', $password);
  if(!$number || !$uppercase)
  {
    $passwordErr="Password should include at least one upper case letter and one number";
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
if(empty($_POST['qualification']))
{
$qualErr="Qualification is required.";
}
if(empty($_POST['phone']))
{
$phoneErr="Phone number is required.";
}
if(!empty($_POST['phone'])){
$phone=test_input($_POST['phone']);
if(!preg_match('/^[0-9]{10}+$/', $phone)) {
$phoneErr="Invalid phone number";
$valid=0;
}
}
if(empty($_POST['type-of-work']))
{
$typeErr="This field may not be empty.";
}
if(empty($_POST['applied-position']))
{
$posErr="This field may not be empty.";
}  if(empty($_POST['salary']))
{
$salaryErr="This field may not be empty.";
}
if($valid==1 &&!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['radio']) && !empty($_POST['qualification']) && !empty($_POST['phone']) && !empty($_POST['salary']) && !empty($_POST['type-of-work']) && !empty($_POST['applied-position']))
{
    $fname=$_POST['fname'];
    $password=$_POST['password'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $type_of_work=$_POST['type-of-work'];
    $phone=$_POST['phone'];
    $applied_position=$_POST['applied-position'];
    $qualification=$_POST['qualification'];
    $salary=$_POST['salary'];
    $gender=$_POST['radio'];
    $sql="INSERT INTO staff (fname,lname,email,staff_password,gender,homeaddress,qualification,phone_no,type_of_work,applied_position,salary) VALUES ('$fname','$lname','$email','$password','$gender','$address','$qualification','$phone','$type_of_work','$applied_position','$salary') ";
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