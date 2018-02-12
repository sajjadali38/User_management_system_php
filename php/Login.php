<?php
include 'connection.php';

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$sql=mysql_query('SELECT * FROM login where username="'.$username.'" AND password="'.$password.'"');
$result = mysql_fetch_array($sql);
/*echo '<pre>';
print_r($result);
exit;*/
while($result = mysql_fetch_array($sql)) {
echo '<pre>';
print_r($result);
echo " <b>Name</b> = " .$result['username'];
}
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
    <p align="left">&nbsp;</p>
             <table> 
            <tr>
        <h1 style="color:#996666">Please Login</h1>
          </tr>
          
          <form id="form1" name="form1" method="post" action="Welcome.php">
              <tr>
              <td>Username</td>
               <td><input type="text" name="username" maxlength="255" id="username"/></td>
              </tr>
              <br><br>
              <tr>
                <td>     <br />
                Password</td>
                <td>
                     <br />
             <input type="password" name="password" maxlength="255" id="password"/></td>
                <tr>
                <td>
                <br /><br />
                <input type="submit" name="" value="Login"  ></td>
             
                </tr>
            </form>
            </td>
          </tr>
          
        </table>
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
