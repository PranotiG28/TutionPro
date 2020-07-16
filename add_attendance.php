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
if($_REQUEST['add'])
{

<script>alert("One record added successfully....");</script>
<?php
}
?><script src="addcourse.js" language="javascript"></script>
  <form name="addcourseform" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

<center>
<div class=container>
<h3><i><b><font color=blue>ADD COURSE</font></b></i></h3>
<b>
Date: <input type="text" placeholder="ID" name="date"><br><br>

<?php
                                                                                
                $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
               $qry="select id from student1";
                                                                                
              $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....');</script>");
                
                                                                
                while($row=pg_fetch_array($res))
{
echo"<input type=text name=i value=$row[id]><br><br>";
echo" Present <input type=radio name=attendance value=p> Absent<input type=radio name=attendance value=a><br>";
}
pg_close($con);
?>
<input type="submit" name="add" value="Submit" onClick="return check()" />
</form>
</body> 
</html> 
