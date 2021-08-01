<?php
$servername = "localhost";
$username = "cekwenchi1";
$password = "cekwenchi1";
$dbname = "cekwenchi1";
$database = mysqli_connect($servername, $username, $password, $dbname) OR die('Server Error no connection'.mysqli_connect_error());
//getting values from form
$fname=$_REQUEST['fn'];
$lname=$_REQUEST['ln'];
$address=$_REQUEST['address'];
$phnumber=$_REQUEST['phn'];
$mail=$_REQUEST['mail'];
$altaddress=$_REQUEST['alt'];
//sql query to update selected data from table
$delete=mysqli_query($database,"update AddressBook set L_NAME='$lname',ADDRESS_LINE_1='$address',Phone_number='$phnumber',email_id='$mail',alternateaddress='$altaddress' where F_NAME='$fname'");
if ($delete) {
   echo'<h1>Data Updated</h1><br>
   <a href="index.html">Home</a>';

}
else {
   //eeror message
   echo'<h1>Data not Updated</h1><br>
   <a href="updateaddress.html">Update date</a>';
}
?>