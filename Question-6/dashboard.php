<?php
 
  include "inc/header.php";

$sql="SELECT * FROM registration";

$result=mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
.button {
  background-color: #f44336; 
  border: none;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  cursor: pointer;
  border-radius: 5px;
}

.buttondel {
  background-color: #008CBA;}

.buttonadd {
  background-color: #008CBA;}

h2{
	background-color: DodgerBlue;
	text-align: center;
	color: white;
	padding: 20px;
}

th {
  border: 1px solid #ddd;
  text-align: center;
  padding: 20px;
  background-color: #4CAF50;
  color: white;
}
td{
	border: 1px solid #ddd;
    text-align: left;
    padding: 5px;

}


tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:hover{
	background-color: #ddd;
}
</style>
</head>
<body>

<h2>Dashboard</h2>
<h1 class="display-4">WelCome To the Dashboard</strong></h1>
       
        <div class="text-right">
          <a href="logout.php" class="btn btn-danger ">Logout</a>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No.</th>
    <th>Section</th>
    <th>Password</th>
    <th>Action</th>
  </tr>
  <?php
    $i=0;
    if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
  ?>
  <tr>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["email"]; ?></td>
  <td><?php echo $row["phone"]; ?></td>
  <td><?php echo $row["section"]; ?></td>
  <td><?php echo $row["password"]; ?></td>
  <td>
    <center>
    <a class="button" href="delete.php?data=<?php echo $row["email"]; ?>">Delete</a><br><br>

    <a class="button buttondel" href="update.php?data=<?php echo $row["email"]; ?>">Update</a>
  </center>
</td>
  </tr>
  <?php
  $i++;
  }
}
else {
 echo "<table>";
 echo "<tr>";
 echo "<td>";
 echo "0 Results";
 echo "</td>";
 echo "</tr>";
 echo "</table>";
}
 ?>

</table>

<center>
	<br><br><br><a class="button buttonadd" href="/test/registration-form.php">Add Data</a>
</center>

</body>
</html>