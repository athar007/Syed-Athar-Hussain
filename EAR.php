<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EAR PROJECT</title>
<script src="EAR.js" type="text/javascript">
</script>
<style type="text/css">
  body {
	  
	  
	  /*padding-left: 11em;*/
    
	 font-family: Georgia, "Times New Roman",
          Times, serif;
	}
	ul.navbar {
    float:left;
    top: auto;
    left: 1em;
     }
	 h1 {
    font-family: Helvetica, Geneva, Arial,
          SunSans-Regular, sans-serif ;
		  color:#369}
		    ul.navbar li {
    background: white;
    margin: 0.5em;
    padding: 0.3em;
    border-right: .5em solid black }
  
  a:link {
    color: blue }
  a:visited {
    color: purple }
	  h2 {
    margin-top: 1em;
    padding-top: 1em;
    border-top: thin dashed 
	}
	ul li{
		list-style-type:none;
	}
  </style>

</head>
<body onload="document.blogging.userid.focus();" bgcolor="#33FFCC"> 
<div style="width:100%; height:750px; background-image:url(Blogging-Services-670x335.jpg); background-size:cover; visibility:inherit; margin:0 auto"> 
<h1 style="text-align:center">  WELCOME TO EARA BLOGGING </h1> 
<h2 style="text-align:center"> SIGN UP</h2> 
<h3 style="text-align:center"><i>*Use tab keys to move from one input field to the next.</i></h3> 
<ul class="navbar" >

  <li style="margin-left:300px"><a href="login_blog.php">LOG IN</a></li>

</ul>
 
<form style="float:left" name='blogging' onSubmit="return formValidation();" method="post" action="#">

  
<ul style="margin-left:50px">  
<li><label for="userid">User id:</label></li>  
<li><input type="text" name="userid" size="12" /></li>  
<li><label for="passid">Password:</label></li>  
<li><input type="password" name="passid" size="12" /></li>  
<li><label for="username">Name:</label></li>  
<li><input type="text" name="username" size="40" /></li>  
<li><label for="email">Email:</label></li>  
<li><input type="text" name="email" size="40" /></li>  
<li><label id="Gender">Gender:</label></li>  
<li><input type="radio" name="Gender1" value="Male" /><span>Male</span></li>  
<li><input type="radio" name="Gender2" value="Female" /><span>Female</span></li>    
<li><input type="submit" name="submit" value="Submit" /></li>  
</ul>  
</form>
<?php
	if(isset($_POST["submit"]))
	{ 
		$user_id=$_POST["userid"];
		$password=$_POST["passid"];
		$name=$_POST["username"];
		$email=$_POST["email"];
		$Gender="";
		//if(isset($Gender1))
		//{
			if(isset($_POST["Gender1"]))
			{
					$Gender1=$_POST["Gender1"];
					$Gender=$Gender1;
			}
			else if(isset($_POST["Gender2"]))
			{
				
		//}
		//elseif(isset($Gender2))
		//{
		$Gender2=$_POST["Gender2"];
		
		$Gender=$Gender2;
		}
		//}

		
		include("connect.php");
		$sql="insert into blog(user_id,password,name,email,Gender)
		values('".$user_id."','".$password."','".$name."','".$email."','".$Gender."')";
		$n=mysqli_query($con,$sql);
		if($n==1)
		{
			echo"<script>alert('user added')</script>";
			echo"<script>location.href='login_blog.php'</script>";
			
		}
	}
	?>

</div>

</body>
</html>