<html> 
<head> 
<?php
include("index.php")
?>

<title>SILVER OAK COACHING CLASSES</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="css_file.css" type="text/css">                                          <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">
<style>
.container{height:450px;
}
</style>


</head> 
 
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">                    
<?php
if(!$_POST[code])
	{	
		echo '<font face="verdana" color="#336666">';
	                echo "Enter correct data.";
			echo '</font>';
	}
	else if(!$_POST[cname])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[duration])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[fees])
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
 
	
	$sql= "INSERT INTO course(code,cname,duration,fees)
VALUES('$_POST[code]','$_POST[cname]','$_POST[duration]', '$_POST[fees]')";	
$result = pg_query($con,$sql);
?>
<script>alert("One record added successfully....");</script>
<?php
}
?><script src="addcourse.js" language="javascript"></script>
  <form name="addcourseform" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

<br>
<br>
<a href=home.php><img src="previous.png" width="15%" height="20%"></a>
<center>

<div class=container>
<h3><i><b><font color=blue>ADD COURSE</font></b></i></h3>
<b>
Course Code: <input type="text" placeholder="ID" name="code"><br>
Course Name:<input type="text" placeholder="NAME" name="cname"> <br>
Course duration(in years): <input type="text" placeholder="ADDRESS" name="duration"><br>
Course fees:<input type="text" placeholder="DOB" name="fees"><br>

                                                                                
<input type="submit" name="add" value="Submit" onClick="return check()" />
</form>
</body> 
</html> 
