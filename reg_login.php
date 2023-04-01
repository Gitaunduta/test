<?php
/*
require_once "conn.php";

function validate($result)
{
    $result=trim($result);
    $result=stripslashes($result);
    $result=htmlspecialchars($result);
    return $result;
}

$fname=validate($_POST["fname"]);
$admission=validate($_POST["admission"]);
$email=validate($_POST["email"]);
$image=validate($_POST["image"]);
$pass1=validate($_POST["pass1"]);
$pass2=validate($_POST["pass2"]);
$errors=array();*/

include "conn.php";


$pass1=$conn->real_escape_string($_POST['pass1']);
$pass2=$conn->real_escape_string($_POST['pass2']);
if($pass1!=$pass2)
{
    echo '<script type="text/javascript">
    alert("please  ensure password match! :-)"); 						
    window.location="register.php"; 
</script>';

}

if(isset($_POST['submit']))
{
    
    function validData($x)
    {
        $x=trim($x);
        $x=htmlspecialchars($x);
        $x=stripslashes($x);
        return $x;
    }

        $stmt=$conn->prepare("INSERT INTO userstbl (fname,email,pnumber,pasword) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss",$fname,$email,$pnumber,$password);
        
        $fname=validData($_POST['fname']);
        $email=validData($_POST['email']);
        $pnumber=validData($_POST['phone']);
        $password=md5($_POST['pass2']);

        $stmt->execute();

        echo '<script type="text/javascript">
						alert("YOU HAVE REGISTERED SUCCESSFULLY! :-)"); 						
						window.location="login.php"; 
					</script>';
    
        $stmt->close();
        $conn->close();
        
    
}

?>