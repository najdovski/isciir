<?php
	  	session_start();
	if(!isset($_SESSION['simple_login'])){
		header("Location: index.php");
		exit();
	}
?>
<style>
@import url("https://fonts.googleapis.com/css?family=Playfair+Display|Poppins:300,400,500,600,700,800,900");
table {
	  font-family: "Poppins", sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.border{
	border-radius: 10px;
}
th {
    text-align: center;
    padding: 10px;
	background-color:#001d4c;
	color:white;
}

td {
    text-align: center;
    padding: 10px;
	background-color:#edf3ff;
	color:gray;
	border-bottom:1px solid rgba(0, 0, 0, .2);
}

tr:nth-child(even){background-color: #f2f2f2}

.button {
  display:inline;
  border-radius: 8px;
  background-color: #029114;
  border: none;
  color: white;
  padding: 12px 20px;
  text-align: center;
  font-size: 16px;
  margin: 10px 5px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button2 {
  display:inline;
  border-radius: 8px;
  background-color: red;
  border: none;
  color: white;
  padding: 12px 20px;
  text-align: center;
  font-size: 16px;
  margin: -20px 5px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}
.button2:hover {opacity: 1}
</style>
<div style="overflow-x:auto;" class="border"><table>
	  <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
	  </tr>
	  
	  <?php

include 'konekcija.php';
$sql = "SELECT * FROM registration";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	  echo' <tr> <td>'.$row['name'].'</td>
	  <td>'.$row['email'].'</td>
	  <td>'.$row['phone'].'</td></tr>';    }
}

?>
</table> </div>

<form method="post" action="list.php">
<input type="submit" name="export" class="button" value="Export as xls" />
</form>

<form method="post" action="logout.php">
<input type="submit" name="export" class="button2" value="Logout"/>
</form>
