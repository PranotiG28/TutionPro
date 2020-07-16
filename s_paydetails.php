<?php
include("index.php");
 $con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
                $qry="select * from payment";
                                                                                
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
<h2> PAYMENT DETAILS</h2>
</center>
<a href=t_home.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<table bgcolor=lightpink frame=border>
<?php
echo"<tr>";
echo"<th>SID</th><th>CARD NO</th><th>CARD HOLDER NAME</th><th>AMOUNT </th><th>MOBILE NO</th>";
echo"<tr>";
while($row=pg_fetch_array($res))
{
echo"<tr>";
echo"<td>".$row["sid"]."</td>";
echo"<td>".$row["cardno"]."</td>";
echo"<td>".$row["cname"]."</td>";
echo"<td>".$row["amt"]."</td>";
echo"<td>".$row["contact"]."</td>";
echo"</tr>";
}
echo"</table>";
pg_close($con);
?>
</font>
</center>
</body>
</html>
