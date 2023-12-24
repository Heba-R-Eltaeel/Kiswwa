<?php

$firstname=$_REQUEST['first_name'];
$lastname=$_REQUEST['last_name'];
$Email=$_REQUEST['email'];
$address=$_REQUEST['Address'];
$birthdate=$_REQUEST['date'];
$gender=$_REQUEST['maleorfemale'];
$phone=$_REQUEST['phone_number'];


if(isset($_POST['login']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="kiswa";


    @$conn= mysqli_connect($host , $user , $password,$db);
    $insert = "insert into Donate values('$firstname' , '$lastname' , '$Email' , '$address' , '$birthdate' , '$gender' , '$phone ')" ;
    mysqli_query($conn,$insert);

    if($conn)
    {
    echo("<h1 style='color:green ;'> Done! </h1>");
    }
    else{
        echo("<h1 style='color:red;'> Try again! </h1>")
    }

}


?>

