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
if(!$_POST[r])
	{	
		echo '<font face="verdana" color="#336666">';
		echo"Enter correct data";
		echo '</font>';
	}
	else if(!$_POST[n])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[add])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[dob])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[em])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct data.";
		echo '</font>';
	}
	else if(!$_POST[cn])
        {
                echo '<font face="verdana" color="#336666">';
                echo "Enter correct data.";
                echo '</font>';
        }
	else if(!$_POST[course])
        {
                echo '<font face="verdana" color="#336666">';
                echo "Enter correct data.";
                echo '</font>';
        }

	else 	
		
if($_REQUEST['add'])
{
/*$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");
// $qry="insert into regi values($rno,'$name','$add',$dob,'$email',$mob,'$cr');";
 
  //    $res=pg_query($con,$qry);
 
	
	$sql= "INSERT INTO staff (id,name,qualification,experience,contact,email)
VALUES('$_POST[id]','$_POST[name]', '$_POST[qualification]','$_POST[experience]','$_POST[contact]','$_POST[email]')" ;	
$result = pg_query($con,$sql);*/
$rno=$_POST['r'];
$name=$_POST['n'];
$add=$_POST['add'];
$dob=$_POST['dob'];
$email=$_POST['em'];
$mob=$_POST['cn'];
$cr=$_POST['course'];
$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");
 $qry="insert into regi values($rno,'$name','$add',$dob,'$email',$mob,'$cr');";
                                                                                                                             
      $res=pg_query($con,$qry);
?>
<script>alert("One record added successfully....");</script>
<?php
}
?><script src="reg.js" language="javascript"></script>
  <form name="regform" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

<center><h3><i><b>REGISTATION</b></i></h3>
</center>
<a href=first.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<div class=container><b>
Student reg no  : <input type="text" placeholder="ID" name="r"><br>
Name:<input type="text" placeholder="NAME" name="n"> <br>
Address: <input type="text" placeholder="ADDRESS" name="add"><br>
DBO*:<input type="text" placeholder="DOB" name="dob"><br>
Email id <input type="text" placeholder="EMAIL ID" name="em"><br>
<!--Qualification: <input type="text"  name="qua"><br><br>-->
Contact no:<input type="text" placeholder="CONTACT NO" name="cn"><br><br>
                                                                                                                             
Select course:
<?php
                                                                                                                             
                $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                                                             
               $qry="select cname from course";
                                                                                                                             
              $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....');</script>");
                                                                                                                             
                while($row=pg_fetch_array($res))
{
?>
<!--echo"-->
<input type=radio name=course value=<?php echo $row[cname]; ?>><?php echo $row[cname];
}
pg_close($con);
?>
<input type="submit" name="add" value="Submit" onClick="return check()" />
</form>
</body> 
</html> 
