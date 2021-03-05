<?php
if (session_id()=="") {
  	session_start();
  }  
$conn=mysqli_connect('localhost','root','','eshopper');
// print_r($conn);
?>