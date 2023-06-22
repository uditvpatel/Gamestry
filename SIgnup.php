<?php
include '../connection.php';

//POST = send/ save data to mysql db
//GET = retrieve/read data from mysql db

$userName = $_POST['user_name'];
$userEmail =$_POST['user_email'];
$userPassword = mds($_POST['user_password']);

$sqlQuery = "INSERT INTO user_table SET user_name = '$userName', user_password ='$userPassword', user_emial = '$userEmail'";

$resultofquery = $connectNow-> query($sqlQuery);

if($resultofquery)
{
    echo json_encode(array("success"==>true));
}
else
{
    echo json_encode(array("success"==>false));
}