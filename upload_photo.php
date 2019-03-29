<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upload photo</title>
 
</head>
<div style="width:100%; height:1000px; float:left; background-color:#99F; background-size:cover; visibility:inherit; margin:0">

<body >
 <p style="margin-top:100px" align="justify"><a href="profile_blog.php"><b><input type="submit" name="button" value="Profile"/></b></a></p>
        <p style="margin-top:10px" align="justify"><a href="logout_blog.php"><b><input type="submit" name="button" value="Logout"/></b></a></p>
        <form method="post" enctype="multipart/form-data">
<table style="margin-left:500px; float:left">

		<!--
			form method should be post.
			enctype should be set to multipart/form-data
			which indicates how the data will be encoded
			before it reaches the server.

		-->
			
				<tr><th><label>SELECT FILE TO UPLOAD</label></th>
				<td><input type="file" name="f" required></td></tr>
				
				<tr><td colspan="2" style="margin-left:500px"><input type="submit" value="Upload" name="btn"></td></tr>
			
		
        </table>
        </form>
		<?php
		session_start();
		$user=$_SESSION["user_id"];
			if(isset($_POST["btn"]))
			{
				$filename=$_FILES["f"]["name"];
				//returns the actual filename
				$tmpname=$_FILES["f"]["tmp_name"];
				//returns the temporary filename
				if(!is_dir("uploads"))
					mkdir("uploads");
				//creates a folder called uploads
		
			move_uploaded_file($tmpname,"C:/xampp/htdocs/ph/project/uploads/".$filename);
				include("connect.php");
		$sql="update blog set photo='".$filename."' where user_id='".$user."'"; 
		$n=mysqli_query($con,$sql);
				if($n==1){
				echo"<script>alert('photo uploaded')</script>";
				echo"<script>window.location.href='profile_blog.php'</script>";
				
				}

				//moves the temporary file to the server path
			}		
		?>
       
</body>
</html>