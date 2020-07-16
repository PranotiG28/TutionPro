<html>
<?php
include("index.php")
?>
<head>
 <link rel="stylesheet" type="text/css" href="css_file.css">
<style>
.container{
height:1050px;
}
</style>
</head>
<body> 
                                                                                                                             
<form method="post" action="addstud.php">
<center>
<br>
<br>
<h4><i><b>ADD STUDENT</b></i></h4>
</center><pre>
<a href=home.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<div class=container>
Reg No:<input type="text" placeholder="" name="reg"><br>
<input type=submit name="search"><br>
<?php
if($_REQUEST['search'])
{
$r=$_POST['reg'];
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
               $qry="select * from regi where rno=$r";
                                                                                
              $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....');</script>");
                                                                                
                while($row=pg_fetch_array($res))
{?>

userid:<input type=text name="uid" value=<?php echo(rand(10,100)); ?>>
Password:<input type=text name="pass" value=<?php echo(rand(500,1000));?>><br>
Name:<input type="text" placeholder="NAME" name="name" value=<?php echo $row['name']; ?> > 
Address: <input type="text" placeholder="ADDRESS" name="add" value=<?php echo $row['add']; ?> >
DOB*:<input type="text" placeholder="DOB" name="dob" value=<?php echo $row['dob']; ?> >
 
Email id: <input type="text" placeholder="EMAIL ID" name="email" value=<?php echo $row['email']; ?> >
 
contact no <input type="text" placeholder="CONTACT NO" name="mob" value=<?php echo $row['mob']; ?>>
Selected  Course:<input type=text value=<?php echo $row['course']; ?>>
</b>
<input type="submit" name="add">  
<?php }

pg_close($con);
}
?>
<!--</pre>
</form>
</div>
</center>
</body>
</html>-->
<?php
        if($_REQUEST['add'])
        {
              $uid=$_POST['uid']; 
             $pass=$_POST['pass'];                                                              $name=$_POST['name'];
        	$add=$_POST['add'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$mob=$_POST['mob'];
	$course=$_POST['course'];
	
                                                                                
                $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
                $qry="insert into student values('$name','$add','$dob','$email','$mob','$course','$uid','$pass');";
                                                                  
      $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....'); </script>");
                                                                                
 echo "<script>alert('Record is added Succesfully..... ');</script>";
if($res)
{
echo "<body bgcolor=orange>";
echo "<font size=5 color=violet>";
?>
<script>alert("Your Registration Successful.....!
We Welcome You to the New Era Of Experience");
</script>
<?php
}
}
?>     
</pre>
</form>
</div>
</center>
</body>
</html>

