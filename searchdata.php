<?php
$servername = "localhost";
$username = "cekwenchi1";
$password = "cekwenchi1";
$dbname = "cekwenchi1";
$database = mysqli_connect($servername, $username, $password, $dbname) OR die('Server Error no connection'.mysqli_connect_error());
//getting searchby (table column name) and values
$searchby=$_REQUEST['searchby'];
$input=$_REQUEST['input'];

//sql query to retrieve data from table
$search=mysqli_query($database,"select * from AddressBook where `$searchby`='$input'");

//displaying data in table format
if($search){
   $fetch=mysqli_fetch_assoc($search);
echo "<br><h1>Display Data</h1>
           <table width='900px' border='2px solid black'>
                   <tr>
                       <th>First name</th>
                       <th>Last Name</th>
                       <th>Address</th>
                       <th>Phone Numbers</th>
                       <th>Email</th>
                       <th>Alternative Address</th>
                   </tr>";   
           echo "<tr>
               <td>".$fetch['F_NAME']."</td>
               <td>".$fetch['L_NAME']."</td>
               <td>".$fetch['ADDRESS_LINE_1']."</td>
               <td>".$fetch['Phone_number']."</td>
               <td>".$fetch['email_id']."</td>
               <td>".$fetch['alternateaddress']."</td>
               </tr>";
           echo'</table>
              <a href="index.html">Home</a>';
}

?>