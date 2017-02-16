<?php
include("db.php");

session_start();
$user_id = $_SESSION['login_id'];
$message = $_SESSION['message'];
/*$username=mysqli_real_escape_string($db,$username);
$user_id="SELECT * FROM accounts WHERE username='$username'";
$result_id = mysqli_query($db,$user_id);
$myresult = mysqli_fetch_assoc($result_id);
*/
$sql = "SELECT * FROM items WHERE ownerid='$user_id'";
$result = mysqli_query($db,$sql);

echo '<form action="delete.php" method="POST">
<table border="1">
<tr>
<th>Image</th>
<th>title</th>
<th>description</th>
<th>priceperday</th>
<th>priceperweek</th>
<th>pricepermonth</th>
<th></th>
</tr>';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
/*echo "<input type=\"hidden\" name=\"itemid\" value=".$row['itemid'].">";*/
echo '<td><img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" width="158" height="150" hspace="10"/></td>';
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "<td>" . $row['priceperday'] . "</td>";
echo "<td>" . $row['priceperweek'] . "</td>";
echo "<td>" . $row['pricepermonth'] . "</td>";
/*echo "<td><div id=\"delete\"><input type=\"submit\" name=\"delete\" value=\"Delete\"></div></td>";*/
/*echo '<td><input type="submit" name="deleteItem" value="'.$row['itemid'].'" /></td>"';*/
echo "<td><a href='delete.php?id=".$row["itemid"] ."'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";
echo "</form>";
if ($message) {
	echo $message;
}
echo '<br><button>
	<a href="createitem.php" style="text-decoration : none;">Create</a>
	</button>';
echo '<br><button>
	<a href="airbnb.php" style="text-decoration : none;">Homepage</a>
	</button>';

?>
