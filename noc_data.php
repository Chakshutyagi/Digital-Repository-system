<?php
  
// Username is root
$user = "root";
$password = ""; 
  
// Database name is gfg
$database = "noc"; 
  
// Server is localhost with
// port number 3308
$servername="localhost:3306";
$mysqli = new mysqli($servername, $user,$password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM registered ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>NOC  REQUEST</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>STUDENTS DETAILS THAT FILLED NOC FORM</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>NAME</th>
                <th>ENROLLMENT NUMBER</th>
                <th>CONTACT NUMBER</th>
                <th>EMAIL ID</th>
                <th>DIVISION</th>
                <th>YEAR</th>
                <th>DOB</th>
                <th>FATHER NAME </th>
                <th>FATHER MOBILE NUMBER</th>
                </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['enroll'];?></td>
                <td><?php echo $rows['number'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['division'];?></td>
                <td><?php echo $rows['year'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['fnumber'];?></td>
               
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>