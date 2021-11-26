<?php
$Name = $_POST['Name'];
$Blockname = $_POST['Blockname'];
$Regno = $_POST['Regno'];
$Roomtype = $_POST['Roomtype'];
$acornonac = $_POST['acornonac'];
$Dateofjoining = $_POST['Dateofjoining'];
$Fathername = $_POST['Fathername'];
$Branch = $_POST['Branch'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "kkabase";
  // Database connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if($conn->connect_error){
    echo "$conn->connect_error";
    
  } else {
    $stmt = $conn->prepare("insert into registration(name, block_name, reg_no, room_type, ac_or_nonac , joining_date, father_name, branch) values(?, ?, ?, ?,?,?,?,?)");
    $stmt->bind_param("ssssssss", $Name, $Blockname, $Regno, $Roomtype, $acornonac, $Dateofjoining, $Fathername, $Branch);
    $execval = $stmt->execute();
    echo $execval;
    
  //echo '<script language="javascript">';
  //echo 'alert(Appointment booked succesfully)';  //not showing an alert box.
  //echo '</script>';
     echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
     echo( "<button onclick= \"location.href='index.html'\">Back to Home</button>"); 
 
$stmt->close();
$conn->close;
}
?>