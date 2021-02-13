<?php

$db = mysqli_connect("localhost","root","","usersdb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>