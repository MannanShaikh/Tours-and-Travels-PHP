<?php
$con = mysqli_connect("localhost","root","","store");
if(isset($_POST['name'], $_POST['pass']))
{
    $user = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "select * from register where username = '".$user."' AND password = '".$pass."' limit 1 ";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1)
    {
        echo"Login Successful";
    }
    else
    {
        echo"Login Failed";
    }
}
?>