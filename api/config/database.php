<?php

session_start();
$conn = mysqli_connect("localhost","root","","brandi");
if(!$conn){
    die("Couldn't connect to the database...");
}