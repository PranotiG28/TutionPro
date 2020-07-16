<html> 
<head> 
<?php
include("index.php")
?>

<title>SILVER OAK COACHING CLASSES</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="css_file.css" type="text/css">                                          <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">

</head> 
 
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF"> 
<!--<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr> <td valign="top" height="18" colspan="2">  -->
 
         
                    
<?php
if(!$_POST[name])
	{	
		echo '<font face="verdana" color="#336666">';
		
		echo '</font>';
	}
	else if(!$_POST[qualification])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[experience])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[contact])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[email])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else 	
		
if($_REQUEST['add'])
{
$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");
// $qry="insert into regi values($rno,'$name','$add',$dob,'$email',$mob,'$cr');";
 
  //    $res=pg_query($con,$qry);
 
	
	$sql= "INSERT INTO staff (id,name,qualification,experience,contact,email)
VALUES('$_POST[id]','$_POST[name]', '$_POST[qualification]','$_POST[experience]','$_POST[contact]','$_POST[email]')" ;	
$result = pg_query($con,$sql);
?>
<script>alert("One record added successfully....");</script>
<?php
}
?><script src="addfaculty.js" language="javascript"></script>
  <form name="addfacultyform" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

<center><h3><i><b>ADD FACULTY</b></i></h3>
</center>
<a href=home.php><img src="previous.png" width="15%" height="20%"></a>
<center>



<div class=container><b>
Teacher Id  : <input type="text" placeholder="ID" name="id"><br>
Name:<input type="text" placeholder="NAME" name="name"> <br>
Qualification:<input type="text" placeholder="DOB" name="qualification"><br>
Experience(in years) <input type="text" placeholder="EMAIL ID" name="experience"><br>
<!--Qualification: <input type="text"  name="qua"><br><br>-->
Contact no:<input type="text" placeholder="CONTACT NO" name="contact"><br><br>
Email:<input type="text" placeholder="Email" name="email"><br><br>
                                                                                
<input type="submit" name="add" value="Submit" onClick="return check()" />
</form>
</body> 
</html> 
