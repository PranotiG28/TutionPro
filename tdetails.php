<?php
include("index.php");
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
                $qry="select * from staff";
                                                                                
      $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....'); </script>");?> 
<html>
<head>
<style>
table,tr,th,td{


border-collapse:collapse;

}
table{
padding:13px;
text-align:center;
border-spacing:2px;
font-size:25px;
font-family:verdana,arial,sans-serif;
}
</style>
</head>
<body bgcolor=aqua>
<center>
<font size=15 color=red face=Marlett>
<h2> TEACHER DETAILS</h2>
<table bgcolor=lightpink frame=border>
<?php
echo"<tr>";
echo"<th>TEACHER-ID</th><th>NAME</th><th>QUALIFICATION</th><th>EXPERIENCE</th><th>CONTACT NO</th><th>EMAIL</th>";
echo"<tr>";
while($row=pg_fetch_array($res))
{
echo"<tr>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["name"]."</td>";
echo"<td>".$row["qualification"]."</td>";
echo"<td>".$row["experience"]."</td>";
echo"<td>".$row["contact"]."</td>";
echo"<td>".$row["email"]."</td>";
echo"</tr>";
}
echo"</table>";
pg_close($con);
?>
</font>
</center>
</body>
</html>
