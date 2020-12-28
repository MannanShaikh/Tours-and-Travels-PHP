<?php
$con = mysqli_connect("localhost","root","","store");
if(isset($_POST['first'], $_POST['last'], $_POST['add'], $_POST['email'], $_POST['mob'], $_POST['user'], $_POST['pass']))
{
$first = $_POST['first'];
$last = $_POST['last'];
$add = $_POST['add'];
$email = $_POST['email'];
$mobile = $_POST['mob'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "insert into register values('".$first."','".$last."','".$add."','".$email."','".$mobile."','".$user."','".$pass."')";

    if($result = mysqli_query($con, $sql))
    {
        echo "Signed Up Successfully";
        //header("location:Login.php");
    }
    else
    {
        echo "Sign Up Failed";
    }
}
?>