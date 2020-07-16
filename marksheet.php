<?php
session_start();
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
$cr=$_SESSION['cr'];
$id=$_SESSION['id'];
$tot=$c1+$c2+$c3+$c4+$c5+$c6;
$per=(($tot/300)*100);
?>
<html>
<head>
<link  rel="stylesheet" href="css_file.css" type="text/css">
<style>
table{
height:50%;
width:90%;
}
.pc{
height:500px;
width:400px;
border:3px solid black;
margin:8px auto;
background-color:pink;
font-size:15px;
padding:20px 60px;
}
</style>
</head>
<body background="a.jpg">
  <form  method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">
<div class=pc>
<a href=t_home.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<h1><b><u><font style="copper sans cs">Dr DY Patil College,Pimpri</font></u><b></h1>
<h2>*******MARKSHEET********</h2>
<br>
<?php 
echo "ID is $id Class is $cr";
echo"<br>";
if(strcmp("$cr","bcs")==0)
{?>
<table>
<tr>
<th>Subject</th>
<th>Obtained Marks</th>
<th>Out of Marks</th>
</tr>
<tr>
<td>Compiler Construction</td><td><?php echo"$c1"?></td><td>50</td></tr>
<tr><td>Operating System</td><td><?php echo"$c2"?></td><td>50</td></tr>
<tr><td>Advanced Java </td><td><?php echo"$c3"?></td><td>50</td></tr>
<tr><td>Advanced PHP </td><td><?php echo"$c4"?></td><td>50</td></tr>
<tr><td>Computer Graphics</td><td><?php echo"$c5"?></td><td>50</td></tr>
<tr><td>Networking</td><td><?php echo" $c6"?></td><td>50</td></tr>
</table>
<?php
}
else 
if(strcmp("$cr","bca")==0)
{
?>
<table>
<tr>
<th>Subject</th>
<th>Obtained Marks</th>
<th>Out of Marks</th>
</tr>
<tr>
<td>Advanced web technology</td><td><?php echo"$c1"?></td><td>50</td></tr>
<tr><td>Advanced Java</td><td><?php echo"$c2"?></td><td>50</td></tr>
<tr><td>Recent trends In It </td><td><?php echo"$c3"?></td><td>50</td></tr>
<tr><td>Software Testing </td><td><?php echo"$c4"?></td><td>50</td></tr>
<tr><td>Informtion Security</td><td><?php echo"$c5"?></td><td>50</td></tr>
<tr><td>Android Devlopment</td><td><?php echo" $c6"?></td><td>50</td></tr>
</table>
<?php
}
?>
<h3>
Total Marks   <?php echo "$tot"?><br>
Percentage   <?php echo "$per"?><br>
<input type=submit value="Save" name="add">
</center>
</div>
</form>
</body>
</html>
<?php
if(($_SERVER['REQUEST_METHOD']=='POST'))
{
$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");                                                                     
        $sql= "INSERT INTO result values('$id','$cr', '$c1','$c2','$c3','$c4','$c5','$c6','$tot','$per')" ;
$result = pg_query($con,$sql);
if($result!=false)
{
echo"<center>";
echo "<body bgcolor=yellow>";
echo "<font size=5 color=violet>";
?>
<script> alert("One record added successfully....");</script>
<?php
}}
pg_close($con);
?>

