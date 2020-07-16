<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1">
<script>
function validateForm(){
var x=document.forms["myForm"]["uname"].value;
if(x=="")
{
alert("User name must be filled");
return false;
}
}
</script>
<style>
body{font-family:Arial,Helvetica,sans-serif;
color:red;}
form{border:3px solid#f1f1f1;}
input[type=text],
input[type=password]
{width:50%;
padding:12px 20px;
margin:8px 0;
display:inline-block;
border:1px solid #ccc;
box-sizing:border-box;
}
.container
{padding-top:10px;
padding-left:20px;
margin:50px auto;
background-color:rgba(0,0,0,0.2);
height:270px;
width:300px;
}
button{background-color:#4caf50;
color:white;
padding:12px 20px;
margin:0px 80px;
border:none;
cursor:pointer;
width:40%;
}
.fi{background-image:url("img1.jpeg");
height:200px;
font-family:verdana;
border:3px solid #000;
padding:30px;
}
.co{

border:3px solid #000;
height:650px;
}
</style>
</head>
<body background="A.jpg">
<div class=co>
<div class=fi>
<b><h1>    TUTION MANAGEMENT SYSTEM</h1></b>
</div>
<div class="container">
<form name="myForm" action="teacherlogin.php" onsubmit="return validateForm()" method="post">
<h2> login </h2>
<label for="uname">
<b>Username</b></label>
<input type="text" placeholder="Enter Username" name="uname" required><br>
<label for="psw">
<b>Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required><br>
<button type="submit">Login</button>
</div>
</div>
</div>
</body>
</html>
