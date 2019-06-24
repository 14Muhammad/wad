<?php
require_once "server/db_connection.php";
$email = $_GET['e'];
$sel_email = "select * from customers where cust_email = '$email'";
$sel_result = mysqli_query($con,$sel_email);
if(mysqli_num_rows($sel_result) > 0){
    echo "<i> Already Taken </i>";
}