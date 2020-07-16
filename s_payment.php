<html> 
<head> 
<?php
include("index.php")
?>

<title>SILVER OAK COACHING CLASSES</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="css_file.css" type="text/css">                                          <link href="images/title.gif" rel="shortcut icon" type="image/x-icon">

</head> 
 
<body  leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF">                     
<?php
if(!$_POST[sid])
	{	
		echo '<font face="verdana" color="#336666">';
                echo "Enter correct Student ID.";		
		echo '</font>';
	}
	else if(!$_POST[cardno])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct Card No.";
		echo '</font>';
	}
	else if(!$_POST[cname])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct Card Holder's Name.";
		echo '</font>';
	}
	else if(!$_POST[cvv])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter correct CVV No.";
		echo '</font>';
	}
	else if(!$_POST[amt])
	{
		echo '<font face="verdana" color="#336666">';
		echo "Enter Amount.";
		echo '</font>';
	}
	else if(!$_POST[contact])
	{
 		echo '<font face="verdana" color="#336666">';
                echo "Enter correct Contact No.";
                echo '</font>';
	}
	else
		
if($_REQUEST['add'])
{
$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");
	
	$sql= "INSERT INTO payment (sid,cardno,cname,cvv,amt,contact)
VALUES('$_POST[sid]','$_POST[cardno]', '$_POST[cname]','$_POST[cvv]','$_POST[amt]','$_POST[contact]')" ;	
$result = pg_query($con,$sql);
?>
<script>alert("One record added successfully....");</script>
<?php
}
?><script src="s_payment.js" language="javascript"></script>
  <form name="s_payment" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

<center><h3><i><b>PAYMENT DETAILS</b></i></h3>
</center>
<a href=index_st1.php><img src="previous.png" width="15%" height="20%"></a>
<center>
<div class=container><b>
Student Id        : <input type="text"  name="sid"><br>
Card No           :<input type="text"  name="cardno"> <br>
Card Holder Name  :<input type="text"  name="cname"><br>
CVV No            :<input type="text"  name="cvv"><br>
Amount            :<input type="text" name="amt"><br><br>
Contact No        :<input type="text" name="contact"><br><br>
                                                                                
<input type="submit" name="add" value="Submit" onClick="return check()" />
</form>
</body> 
</html> 
