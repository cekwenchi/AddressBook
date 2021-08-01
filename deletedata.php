<?php
$servername = "localhost";
$username = "cekwenchi1";
$password = "cekwenchi1";
$dbname = "cekwenchi1";
$database = mysqli_connect($servername, $username, $password, $dbname) OR die('Server Error no connection'.mysqli_connect_error());
//getting all row of data to $retrieve variable
//if(isset($i)){
//   $checkbox = $_POST[$i];
echo $i;
// for($j=0;$j<count($checkbox);$j++){

// $del_id = $checkbox[$j];
// $sql = "DELETE FROM AddressBook WHERE Phone_number='$del_id'";
// $result = mysqli_query($database, $sql);
// }

//$retrieve=mysqli_query($database,"DELETE FROM AddressBook WHERE Phone_number = $phnumber;");
//from the query getting number of rows in the table
$rows=mysqli_num_rows($retrieve);
//DELETE FROM AddressBook
//WHERE Phone_number = $phnumber;
echo'<h1>Data Deleted</h1><br>
<a href="index.html">Home</a>';

?>