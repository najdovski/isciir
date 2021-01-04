<div style="overflow-x:auto;" class="border"><table>
	  <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
	  </tr>
<?php   
include 'konekcija.php';
  
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=registered.xls');

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