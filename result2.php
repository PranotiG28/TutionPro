<html>
<head>
<style>
.pc{
height:450px;
width:450px;
border:1px solid blue;
margin:8px auto;
background-color:lightblue;
font-size:15px;
padding:20px 60px;
}
</style>
</head>
<body>
<?php
session_start();
$id=$_POST['id'];
$_SESSION['id']=$id;
$cr=$_POST['course'];
$_SESSION['cr']=$cr;
if(isset($_POST['course']))
{
$str=$_POST['course'];
echo"$str";
if(strcmp("$str","bcs")==0)
{?>
<form action=marksheet.php method=post>
<div class=pc>
<pre>
<h1>Marks details</h1><br>
Compiler Construction : <input type=text name=c1><br>
Operating System      : <input type=text name=c2><br>
Advanced Java         : <input type=text name=c3><br>
Advanced PHP          : <input type=text name=c4><br>   
Computer Graphics     : <input type=text name=c5><br>  
Networking            : <input type=text name=c6><br>   
<input type=submit  value=Next>    <input type=Reset  value=Cancel>
</pre>
</div>
</form>
<?php
}
else 
if(strcmp("$str","bca")==0)
{
?>
<form action=marksheet.php method=post>
<div class=pc>
<pre>
<h1>Marks details</h1><br>
BCA 1		      : <input type=text name=c1><br>
Operating System      : <input type=text name=c2><br>
Advanced Java         : <input type=text name=c3><br>
Advanced PHP          : <input type=text name=c4><br>
Computer Graphics     : <input type=text name=c5><br>
Networking            : <input type=text name=c6><br>
<input type=submit  value=Next>    <input type=Reset  value=Cancel>
</pre>
</div>
</form>
<?php
}}
?>
</body>
</html>
