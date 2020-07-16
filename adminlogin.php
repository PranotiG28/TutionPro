<?php 

$formuser = !isset($_POST['uname'])?NULL:$_POST['uname'];
$formpassword = !isset($_POST['psw'])?NULL:$_POST['psw'];
if(($formuser != POOJA ) || ($formpassword !=PRANOTI ))
{
                                                                                                                             
        include("adminloginform.php");
                exit();
                                                                                                                             
                                                                                                                             
}
if (($formuser == POOJA) && ($formpassword == PRANOTI ))
{
        session_start();
        $_SESSION['basic_is_logged_in'] = true;
        $_SESSION['adminUser'] = POOJA;
        $_SESSION['adminPassword'] = PRANOTI;
        $SID = session_id();
	$path="home.php";
        include($path);
}
?>

