<?php
include "connection.php";


$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Postal_code=$_POST['Postal_code'];

$query='update user set Name="'.$Name.'",Email="'.$Email.'",Password="'.$Password.'",Postal_code="'.$Postal_code.'"';
mysql_query($query);


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body class="twoColElsLtHdr">
<div id="container">
  <div id="header">
<div align="center">
   <p align="left">&nbsp;</p>

 <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p>
</div>
</div>
<br>  <br> <br> <br> <br> 
<div id="sidebar1">
<menu>
<a href="index.php"> Home  </a >
<br> <br>
<a href="Login.php"> Login </a>
<br> <br> 
<a href="About us.php"> About us </a>
<br> <br> 
<a href="Contact us.php"> Contact us </a>
<br> <br> 
<a href="Feedback.php"> Feedback </a>

<br><br>
<a href="FAQ.php"> FAQ </a>
<br /><br /><br /><br />
</menu>
<br /><br /><br /><br /><br />
</div>
<div id="mainContent" >
<div align="left">
  <form name="form1" method="post"  action="register.php"  />
<table >
  <tbody>
  <tr>
    <td><label for="Name">Name</label></td>
    <td><input type="text"  name="Name" value="" maxlength="50"  />

    </td>
  </tr>
     <tr>
    <td><label for="Email">Email</label></td>
    <td><input type="text" name="Email" value="" maxlength="50"/>
    </td>
  </tr>
  <tr>
    <td><label for="Password">Password</label></td>
    <td><input name="Password"  type="text"/></td>
  </tr>  
  <tr>

    <td><label for="Postal_code">Postal_code</label></td>
    <td><input type="text"  name="Postal_code" value="" maxlength="50"  />
    </td>
  </tr>  
  <tr><td>
  <br /><br />
 <input type="submit" value="Submit" name="Submit"></td> 
 <td>
 <br /><br />
 <input type="reset" value="cancel" name="Submit"></td>
 </tr>
 
 <tr>
 <td><br><br>
 <a href="usermanagement.php">back</a></td></tr>
<br><br><br>
   </table>
</form>
    </div>

  </div>

<p>&nbsp;</p>
 <p>&nbsp;</p>   
 <p>&nbsp;</p>
 <p>&nbsp;</p>   
 <p>&nbsp;</p>
 <p>&nbsp;</p> 
  <p>&nbsp;</p> 
  
<div id="footer">
</div>
</div>

<MARQUEE bgcolor="#CCCCCC" loop="-1" scrollamount="5" width="79%" >
<p>designed by:Sajjad Ali,Mati-ur-Rehman,Rizwan Taj  </p>

</MARQUEE>


</body>
</html>

