<?php
include("index.php");
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
           session_start();
		$ui=$_SESSION['stud_user'];
		$pw=$_SESSION['stud_password'];
	//echo"$ui<br>";
	//	echo"$pw<br>";                                                                     
                $qry="select * from student where userid=$ui and password=$pw";
                                                                                
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
<h2> MY PROFILE</h2>
</center>
<a href=index_st1.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<div class=container><b>

Student Name  : <input type="text" placeholder="ID" name="n" value=<?php echo $row['name']; ?>><br>
Address: <input type="text" placeholder="ADDRESS" name="add" value=<?php echo $row['add']; ?>><br>
Email:<input type="text" placeholder="email" name="email" value=<?php echo $row['email']; ?>><br>
Course <input type="text" placeholder="course" name="cr" value=<?php echo $row['course']; ?>><br>
<!--Qualification: <input type="text"  name="qua"><br><br>-->
Userid:<input type="text" placeholder="CONTACT NO" name="uid" value=<?php echo $row['userid']; ?>><br><br>
Password:<input type="text" placeholder="CONTACT NO" name="pw" value=<?php echo $row['userpassword']; ?>><br><br>
</div>
<?php
}pg_close($con);
?>

<!--<table bgcolor=lightpink frame=border>

/*

echo"<tr>";
echo"<th>NAME</th><th>ADDRESS</th><th>DOB</th><th>EMAIL </th><th>MOBILE NO</th><th>COURSE</th>";
echo"<tr>";
while($row=pg_fetch_array($res))
{
echo"<tr>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["add"]."</td>";
echo"<td>".$row["dob"]."</td>";
echo"<td>".$row["email"]."</td>";
echo"<td>".$row["mob"]."</td>";
echo"<td>".$row["userid"]."</td>";
echo"<td>".$row["password"]."</td>";
echo"</tr>";
}
echo"</table>";
pg_close($con);*/
-->
</font>
</center>
</body>
</html>
