<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PROFILE</title>
</head>
<div style="width:1400px; height:850px; background-image:url(best-powerpoint-templates-white-background-cool-powerpoint-backgrounds-white-listmachinepro-download.jpg); background-size:cover; visibility:inherit; margin:0 auto">
<style type="text/css">
body{

 font-family: "Comic Sans MS", cursive;
	}
	ul.navbar {
		box-sizing:content-box;
		color:#F33;
    float: inherit;
    top: auto;
    left:50em;
     }
	 h1 {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif; color:#F33; border-color:#0C0; border:medium;}
		    ul.navbar li {
    background: white;
    margin: 0.5em;
    padding: 0.3em;
    border-right: solid }
  
  a:link {
    color: blue }
  a:visited {
    color: purple }
	  h2 {
    margin-top: 1em;
    padding-top: 1em; 
	}
	ul li{
		list-style-type: square;
	}
</style>

<body bgcolor="#FFFFFF">
<?php

$con=mysqli_connect("localhost","root","","athar");
session_start();
$user_id=$_SESSION['user_id'];
$result3 = mysqli_query($con,"SELECT * FROM blog where user_id='$user_id'");
while($row3 = mysqli_fetch_array($result3))
{ 
$name=$row3['name'];
$email=$row3['email'];
$Gender=$row3['Gender'];
$address=$row3['address'];
$mobile_no=$row3['mobile_no'];
$photo=$row3['photo'];
$photo="uploads/".$photo;
}
?>
<table width="1040" border="0" align="center" cellpadding="10px">
  <tr>
    <td height="26" colspan="2"><h1 style="color:#F33">Profile</h1> </td>
	<td style="font-style:inherit"><div align="right"><a href="login_blog.php"><h4 style="color:#F33"><input type="submit" name="button" value="logout" /></h4></a></div></td>
  </tr>
  <tr>
    <td width="364" rowspan="4"><img src="<?php echo $photo ?>" width="300" height="350" alt="no image found"/></td>
    <td width="110" valign="top"></td>
    <td width="293" valign="top"><h2 style="color:#F33"><?php echo $name ?></h2></td>
  </tr>
  <tr>
    <td width="20" valign="top"><div align="left"><h4>Email:</h4></div></td>
    <td width="10" valign="top"><h4 style="color:#F33"><?php echo $email ?></h4></td>
    </tr>
<tr>
    <td width="20" valign="top"><h4>Gender:</h4></td>
    <td width="10" valign="top"><h4 style="color:#F33"><?php echo $Gender ?></h4></td>
</tr>
<tr>
  <td width="20" valign="top"><div align="left"><h4>Address</h4></div></td>
    <td width="10" valign="top"><h4 style="color:#F33"><?php echo $address ?></h4></td>
  </tr>
  <tr>
  <td width="20" colspan="2" align="right" valign="top"><div align="right"><h4 style="margin-right:65px">Mobile no.</h4></div></td>
    <td width="10" valign="top"><h4 style="color:#F33"><?php echo $mobile_no ?></h4></td>
  </tr>
    
</table>
<ul>
<p style="float:!important" align="justify"><a href="upload_photo.php"><input type="submit" name="button" style="margin-left:200px" value="Upload Photo" /></a></p>
<p align="justify"><a href="profileupdate_blog.php"><input type="submit" name="button" style="margin-left:200px" value="Update Profile" /></a></p>
<p align="justify"><a href="showpost_blog.php"><input type="submit" name="button" style="margin-left:200px" value="All Post"/></a></p>
<P align="justify"><a href="post_blog.php"><input type="submit" name="button" style="margin-left:200px" value="Add Post" /></a></P>
</ul>			 
</body>
</html>