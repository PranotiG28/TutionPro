<?php
  if (empty($_POST["n"])) {
   echo" Name is required";
  } 
else 
    if (!preg_match("/^[a-zA-Z ]*$/",$n)) 
	{
     echo"Only letters and white space allowed";
    }
else{


$rno=$_POST['r'];
$name=$_POST['n'];
$add=$_POST['add'];
$dob=$_POST['dob'];
$email=$_POST['em'];
$mob=$_POST['cn'];
$cr=$_POST['course'];
$con=pg_connect("host=localhost dbname=mydb user=postgres") or exit("Unable to open");
 $qry="insert into regi values($rno,'$name','$add',$dob,'$email',$mob,'$cr');";
                                                                                                                             
      $res=pg_query($con,$qry);
// die("<script> alert('Unable to insert....'); </script>");
                                                                                                                             
 echo "<script>alert('Record is added Succesfully..... ');</script>";
if($res!=false)
{
echo"<center>";
echo "<body>";
echo "<font size=5 color=violet>";
echo "Your Registration Successful.....!"."<br>";
echo "click here <a href=first.php> HOME</a>";
echo"</center>";
}
pg_close($con);
}
?>
