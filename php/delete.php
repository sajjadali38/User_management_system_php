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
  			  <?php
			include("connection.php");
			
						
			
			

			$Query="Truncate table user;"; 

			$dbresult=mysql_query($Query);
			
			echo 'delete';

?>
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
<p>designed by:Sajjad Ali,Mati-ur-Rehman,Rizwan Taj</p>

</MARQUEE>


</body>
</html>
