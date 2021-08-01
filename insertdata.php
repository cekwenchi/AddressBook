<?php
//database connection
$servername = "localhost";
$username = "cekwenchi1";
$password = "cekwenchi1";
$dbname = "cekwenchi1";
$database = mysqli_connect($servername, $username, $password, $dbname) OR die('Server Error no connection'.mysqli_connect_error());
//getting input values and storing in php variables
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$address=$_POST['address'];
$phnumber=$_POST['phn'];
$mail=$_POST['mail'];
$altaddress=$_POST['alt'];

//sql query to insert data in table
$insert=mysqli_query($database,"insert into AddressBook(F_NAME, L_NAME, ADDRESS_LINE_1, Phone_number, email_id, alt_phone_number) values('$fname','$lname','$address','$phnumber','$mail','$altaddress') ") or die(mysqli_error($database));
if ($insert) {
    echo'<h1>Address Added</h1><br>
    <a href="index.html">Home</a>';
}
else{
    //error message if not inserted
echo'<h1>Data Not Inserted</h1><br>
    <a href="index.html">Home</a>';
}
?>