<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body,html{margin:0; padding:0}
  body {
	  
	  
	  /*padding-left: 11em;*/
    
	 font-family: Georgia, "Times New Roman",
          Times, serif;
	}
	 table { background-color:#966; width:355px; height:210px; margin-left:737px; float:left; margin-top:425px }
  </style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN PAGE</title>
</head>

   <body onload="document.blogging.userid.focus();" bgcolor="#FFFFFF"> 
<div style="width:100%; height:750px; background-image:url(../Blogging-Services-670x335.jpg); background-size:cover; visibility:inherit; margin:0 auto"> 
<h2 style="text-align:center"> LOG IN</h2> 
<h3 style="text-align:center"><i>*Use tab keys to move from one input field to the next.</i></h3> 
<ul class="navbar" >

  <li style="margin-left:300px"><a href="EAR.php">SIGN UP</a></li>

</ul>

  <div style="width:100%; height:1000px; background-image:url(blog.png); background-size:cover; visibility:inherit; margin:0 auto"> 
  <form method="post" action="#">

  
  


  
  <table width="418" border="1" >
    <tr>
      <th width="92" scope="col">USER ID</th>
      <th width="140" scope="col"><label for="textfield2"></label>
        <input type="text" name="t1" id="textfield2" /></th>
      </tr>
    <tr>
      <th> PASSWORD</th>
      <th><label for="textfield3"></label>
        <input type="password" name="t2" id="textfield3" /></th>
      </tr>
    <tr>
      <th height="37"></th>
      <th><input type="submit" name="btn" id="button" value="Login" /></th>
      </tr>
  </table>
  </form>
  <?php
  if(isset($_POST["btn"]))
  {
	  $user_id=$_POST["t1"];
	  $password=$_POST["t2"];
	  
	  include("connect.php");
	  $sql="select * from blog where user_id='".$user_id."' and password='".$password."'";
	  $rs=mysqli_query($con,$sql);
	  if(mysqli_num_rows($rs)==1)
	  {
		  session_start();
		  $_SESSION["user_id"]=$user_id;
		  $_SESSION["password"]=$password;
		  header("location:profile_blog.php");
	  }
	  else
	  echo"<script>alert('Invalid user name/password')</script>";
      }
     ?>
     
  
  </div>
</body>
</html>