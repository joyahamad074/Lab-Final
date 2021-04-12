<?php
include "inc/header.php";
$sql = "DELETE FROM registration WHERE email='" . $_GET["data"] . "'";

$result=mysqli_query($conn,$sql);

if($result){
	echo "Record Deleted successfully";
	echo '<script type="text/JavaScript">  
     alert("Record Deleted successfully!"); 
     </script>'; 
  header("Refresh: 0; URL=/test/dashboard.php");
}else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>