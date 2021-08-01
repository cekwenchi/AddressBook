<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- external css file link -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Form</title>

<body>
   <center>
       <div class="container">
   </div>
  

<?php
//database connection
$servername = "localhost";
$username = "cekwenchi1";
$password = "cekwenchi1";
$dbname = "cekwenchi1";
$database = mysqli_connect($servername, $username, $password, $dbname) OR die('Server Error no connection'.mysqli_connect_error());
//sql query to get all rows of data from table
$retrieve=mysqli_query($database,'select * from AddressBook');
           //creating form and displaying names as checkbox input to delete check names
           echo "<br>
           <h2>Delete data form</h2>
       <form name='form' method='POST' action='deletedata.php' >";   
           //Giving input field name=i and incremented for every loop
           $i=1;
           if($retrieve -> num_rows>0){
           while ($fetch=mysqli_fetch_assoc($retrieve)){   
           //echo "<h3><input class='check' type='checkbox' name='".$i."' value='".$fetch['firstname']."'>".$fetch['firstname']."</h3>";
           echo "<h3><input class='check' type='checkbox' name='".$i."'><label for='".$i."'>" .$i.". ". $fetch['F_NAME'] . " ".$fetch['L_NAME']."</label></h3>";
           $i=$i+1;
           }
        }
?>
       <button type = "submit" class="button"> Delete</button><br><br>
       <input class="button" type="reset" name="" value="Reset"><br><br>
       </form>
       <div>
       <!-- anchor tag to reach home page -->
       <a href="index.html" class="button">Home Page</a>
       </div>
   </center>
</body>
</html>