<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" style="background-color:#6FF";>


<?php
include("connect.php");
$sql="select*from posts";
		// $sql="select*from product	where pcost>600";
		// $sql="select*from product	where pname like'M%'";
		//$sql="select*from product order by pcost desc";
		 $rs=mysqli_query($con,$sql); //executes the sql querry
		 if(mysqli_num_rows($rs)>0)
		 {
			 echo"<tr>";
			 echo"<table border='1px' align='center' background='ffd28d_background.jpg'
			 cellpadding='40px' cellspacing='0px'>";
			 echo"<tr>";
			 echo"<th>TITLE</th>";
			 echo"<th>CONTENT</th>";
			 echo"<th>IMAGE</th>";
			 echo"</tr>";
			 while($row=mysqli_fetch_array($rs))
			 {
				 $photo="uploads/". $row[3];
				 echo"<tr>";
				 echo"<td><h3>$row[1]</h3></td>";
				 echo"<td><h5>$row[2]</h5></td>";
				 echo "<td width='129'>";
				 echo "<img src='$photo' width='300' height='200' alt='no image found'/></td>";
				 echo"</tr>";
			 }
			 echo"</table>";
		 }
	 
	 ?>
     </form>
    
</body>
</html>