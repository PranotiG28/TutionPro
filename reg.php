<html>
<head>
<?php include("index_st1.php");?>
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
width:500px;
padding-left:20px;
background-color:pink;
}

</style>
<script>
function validateForm(){
var x=document.forms["myForm"]["n"].value;
if(x==" ")
{
alert("Name must be filled out");
return false;
}
}
</script>
</head>

<body bgcolor="lightblue" >


<form  name="myForm" method="POST" action="reg1.php" onsubmit="return validateForm()">
<center><h4><i><b>REGISTRATION</b></i></h4>
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
                 <button type="submit" name=save>Save</button>         <button type="clear" name=clear>clear  </button>

<!--<Button>Assign Subjects</Button>-->
</div>
</center>
</form>
</body>
</html>
