<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD POST</title>
<style type="text/css" >
body,html{margin:0; padding:0}
  body {
	  background-image:url(180691337-2048x2048.jpg); background-size:cover;
	  /*padding-left: 11em;*/
    
	 font-family: Georgia, "Times New Roman",
          Times, serif;
	}
	 table { background-color:#FFF; width:800px; height:400px; margin-left:250px; float:left; margin-top:350px }
  </style>

</head>

<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
      
<table width="300" height="220" border="0" >
  <tr>
    <th width="228" scope="col">ADD TITLE</th>
    <th width="411" scope="col"><label for="textfield"></label>
      <input type="text" required="required" name="title" id="textfield" />
    </form></th>
  </tr>
  <tr>
    <th> ADD CONTENT</th>
    <th><label for="textarea"></label>
      <textarea name="content" required="required" id="textarea" cols="45" rows="5"></textarea>
    </th>
  </tr>
  <tr>
    <th>UPLOAD PHOTO</th>
    <th>
      <label for="fileField"></label>
      <input type="file" name="f" id="fileField" />
    </th>
  </tr>
  <tr>
    <th>
       <input type="submit" name="button" value="Submit" />
    </th>
    </tr>
</table>
</th></form>
<?php
	if(isset($_POST["button"]))
	{ 
		$title=$_POST["title"];
		$content=$_POST["content"];
        
		$filename=$_FILES["f"]["name"];
				//returns the actual filename
				$tmpname=$_FILES["f"]["tmp_name"];
				//returns the temporary filename
				if(!is_dir("uploads"))
					mkdir("uploads");
				//creates a folder called uploads
		//$image="uploads/".$filename;
			
			move_uploaded_file($tmpname,"C:/xampp/htdocs/ph/uploads/".$filename);
				include("connect.php");
		$sql="insert into posts(title,content,image)
		values('".$title."','".$content."','".$filename."')";
		$n=mysqli_query($con,$sql);
		if($n==1)
		{
			echo"<script>alert('post added')</script>";
			echo"<script>window.location.href='profile_blog.php'</script>";
			
		}
	}
	?>
    
</body>
</html>