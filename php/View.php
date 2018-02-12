<?php 
include 'connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
<tr>
<td>Name</td>
<td></td><td></td><td></td><td>

<td>Email</td>
<td></td><td></td><td></td><td>

<td>Password</td>
<td></td><td></td><td></td><td>



<td>Postal_code</td>

</tr>
<?php
$query='select * from user';
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{?>
<tr><td> 
<?php 

echo $row['Name'];?></td><td></td><td></td><td></td><td>
<td>
<?php
echo $row['Email'];?></td><td></td><td></td><td></td><td>
<td>
<?php
echo $row['Password'];?></td><td></td><td></td><td></td><td>
<td>
<?php
echo $row['Postal_code'];?></td></tr>
<?php } ?>

</table>
<a href="usermanagement.php"> back </a>
</body>
</html>
