<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data" id="imgform">
		<table>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" /></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="description" /></td>
			</tr>
			<tr>
				<td>Price per day</td>
				<td><input type="number" name="ppd" /></td>
			</tr>
			<tr>
				<td>Price per week</td>
				<td><input type="number" name="ppw" /></td>
			</tr>
			<tr>
				<td>Price per month</td>
				<td><input type="number" name="ppm" /></td>
			</tr>
			<tr>
				<td>Upload Image</td>
				<td><input type="file" name="photo" /></td>
			</tr>
		</table>
		<button type="submit" value="upload">Submit</button>
	</form>
	<a href="myitem.php">
		<button>
			Back
		</button>
	</a>
</body>
</html>