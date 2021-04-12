<?php
include("connection.php");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$section=$_POST['section'];
$password=$_POST['password'];

$sql="insert into registration values('','$name','$email','$phone','$section','$password')";

$data=mysqli_query($conn,$sql);

if ($data) {
  echo "New record created successfully";
  echo '<script type="text/JavaScript">  
     alert("Record Created successfully!"); 
     </script>'; 
  header("Refresh: 0; URL=/test/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>