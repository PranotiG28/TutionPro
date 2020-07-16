<?php
include("index.php");
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
                $qry="select * from result";
                                                                                
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
<h2> RESULT  DETAILS</h2>
</center>
<a href=t_home.php><img src="previous.png" width="15%" height="20%"></a>
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
pg_close($con);
?>
</font>
</center>
</body>
</html>
