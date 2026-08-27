<?php
$servername="localhost";
$username="root";
$password="";
$db="gsmfastest";
$conn=new mysqli($servername, $username, $password, $db);
if($conn==TRUE){
    //echo "database is connected successfully";
}
else{
    echo "database is not connected";
}
