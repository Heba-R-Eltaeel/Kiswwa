<?php

$User_Name=$_REQUEST['User_Name'];
$Email=$_REQUEST['email'];
$address=$_REQUEST['Address'];
$birthdate=$_REQUEST['date'];
$phone=$_REQUEST['phone_number'];


if(isset($_POST['login']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="kiswa";


    @$conn= mysqli_connect($host , $user , $password,$db);
    $insert = "insert into Donate values('$User_Name'  , '$Email' , '$address' , '$birthdate'  , '$phone ')" ;
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