<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE PROFILE</title>
<div style="width:100%; height:850px; background-image:url(Blog-posting.jpg); background-size:cover; visibility:inherit; margin:0">

<body bgcolor="#FFFFFF">
</head>

<body>
<form method="post">


		
		<?php
		session_start();
			
			
				include("connect.php");
				$user_id=$_SESSION["user_id"];
				
				$query="select * from blog where user_id='".$user_id. "'";
				$rs=mysqli_query($con,$query);
				if(mysqli_num_rows($rs)==1)
				{
					$row=mysqli_fetch_array($rs);
					echo "<table border='0px' align='center' cellpadding='10px'
					cellspacing='0px'>";
					echo "<tr><th>USER ID</th>";
					echo "<th> PASSWORD</th>";
					echo "<th>NAME</th>";
					echo "<th>EMAIL</th>";
					echo "<th>GENDER</th>";
					echo "<th>ADDRESS</th>";
					echo "<th>MOBILE NO.</th></tr>";
					echo "<tr><td>$row[0]</td>";
					echo "<td><input type='text' name='1' value=$row[1]></td>";
					echo "<td><input type='text' name='2' value=$row[2]></td>";
					echo "<td><input type='text' name='3' value=$row[3]></td>";
					echo "<td><input type='text' name='4' value=$row[4]></td>";
					echo "<td><input type='text' name='5' value=$row[6]></td>";
					echo "<td><input type='text' name='6' value=$row[7]></td>";
					echo "<tr><td colspan='4' align='center'><input type='submit' name='btn1' value='UPDATE'></td></tr>";
					
					
					
				}
			

			?>
</form>
<?php
					if(isset($_POST["btn1"]))
					{
						
						
						$user_id=$_SESSION["user_id"];
						
						$password=$_POST["1"];
						$name=$_POST["2"];
						$email=$_POST["3"];
						$Gender=$_POST["4"];
						$address=$_POST["5"];
						$mobile_no=$_POST["6"];
						
						$q="update blog set password='".$password."',name='".$name."',email='".$email."',Gender='".$Gender."',address='".$address."',mobile_no=".$mobile_no." where user_id='". $user_id. "'";
						$n=mysqli_query($con,$q);
						if($n==1)
							
						{
							echo "<script>alert('profile updated')</script>";
							echo "<script>window.location.href='profile_blog.php'</script>";
						}
					}
			?>
			
</body>
</html>