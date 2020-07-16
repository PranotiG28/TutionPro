<?php 

$formuser = !isset($_POST['uname'])?NULL:$_POST['uname'];
$formpassword = !isset($_POST['psw'])?NULL:$_POST['psw'];
$con=pg_connect("host=localhost user=postgres dbname=mydb") or die("unable to connect database...");
                                                                                
                $qry="select userid,password from student";
                                                                                
      $res=pg_query($con,$qry) or die("<script> alert('Unable to insert....'); </script>");
$flag=false;
	while($row=pg_fetch_array($res))
{
$u= $row["userid"];
$p= $row["password"];
if(($formuser == $u) && ($formpassword == $p))
{

$flag=true;
}
}
if($flag != true)
{
                                                                                
        ?>
<script> alert("Invalid Username and password");
</script>
<?php                                                                        
        include("studlogin.php");
                exit();
                                                                                
                                                                                
}
if ($flag == true)
{
        session_start();
       $_SESSION['basic_is_logged_in_stud'] = true;
        $_SESSION['stud_user'] = $formuser;
        $_SESSION['stud_password'] = $formpassword;
        $SID_stud = session_id();
        $path="index_st1.php";
        include($path);

}







/*if(($formuser != POOJA ) || ($formpassword !=PRANOTI ))
{
                                                                                                                             
        include("studlogin.php");
                exit();
                                                                                                                             
                                                                                                                             
}
if (($formuser == POOJA) && ($formpassword == PRANOTI ))
{
        session_start();
       $_SESSION['basic_is_logged_in'] = true;
        $_SESSION['adminUser'] = ADMINUSER;
        $_SESSION['adminPassword'] = ADMINPASSWORD;
        $SID = session_id();
	$path="index_st1.php";
        include($path);
}*/
?>

