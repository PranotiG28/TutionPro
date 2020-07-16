<?php
include("index.php");
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
           session_start();
		$ui=$_SESSION['stud_user'];
		$pw=$_SESSION['stud_password'];
	//echo"$ui<br>";
	//	echo"$pw<br>";                                                                     
                $qry="select * from result where userid=$ui and password=$pw";
                                                                                
      $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....'); </script>");
  while($row=pg_fetch_array($res))

{
?> 
<html>
<head>


 <link rel="stylesheet" type="text/css" href="css_file.css">
<style>
input[type=text],
input[type=p]
{padding:12px 20px;
margin:20px 10px;
display:inline-block;
width:50%;
border:1px solid #ccc;
box-sizing:border-box;
14:33 12-06-2018
}
button{
color:black;
padding:12px 20px;
border:1px solid #cc;
cursor:pointer;
background-color:red;
}
button[name=save]{width:10%;
}
button[name=clear]{ width:10%;
}
.container
{
width:700px;
padding-left:20px;
height=200px;
background-color:silver;
}
</style>
</head>
<body bgcolor=aqua>
<center>
<font size=15 color=red face=Marlett>
<h2> RESULT</h2>
</center>
<a href=index_st1.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<div class=container><b>
<center>
<table bgcolor=lightpink frame=border>
<?php
echo"<tr>";
echo"<th>STUDENT-ID</th><th>COURSE-NAME</th><th>SUB1</th><th>SUB2</th><th>SUB3</th><th>SUB4</th><th>SUB5</th><th>SUB6</th><th>TOTAL</th><th>PERCENTAGE</th>";
echo"<tr>";
while($row=pg_fetch_array($res))
{
echo"<tr>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["course"]."</td>";
echo"<td>".$row["m1"]."</td>";
echo"<td>".$row["m2"]."</td>";
echo"<td>".$row["m3"]."</td>";
echo"<td>".$row["m4"]."</td>";
echo"<td>".$row["m5"]."</td>";
echo"<td>".$row["m6"]."</td>";
echo"<td>".$row["tot"]."</td>";
echo"<td>".$row["per"]."</td>";
echo"</tr>";
}
echo"</table>";
?>
</font>
</center>
</body>
</html>
