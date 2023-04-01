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

// This line connect to the database
include "conn.php";

//This is the function to validate the data keyed in with the user
function validData($x)
{
    $x=trim($x);
    $x=htmlspecialchars($x);
    $x=stripslashes($x);
    return $x;
}

//Here we check if the submit button has been set or clicked
if(isset($_POST['submit']))
{
    //Here we are getting the passwords and compare them to see if they match
    $pass1 = $conn->real_escape_string(md5($_POST["pass1"]));
    $pass2 = $conn->real_escape_string(md5($_POST["pass2"]));
    
    //Test if the passwords keyed in match
    if($pass1 != $pass2)
    {
        echo '<script type="text/javascript">
        alert("please  ensure password match! :-)"); 						
        window.location="register.php"; 
        </script>';
        die();
    }

    //Here we use the prepared stamemets to query the database
    $stmt = $conn->prepare("INSERT INTO userstbl (fname,email,pnumber,pasword) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss",$fname,$email,$pnumber,$password);
        
    $fname = validData($_POST['fname']);
    $email = validData($_POST['email']);
    $pnumber = validData($_POST['phone']);
    $password = md5($_POST['pass2']);

    //Executing the database
    $stmt->execute();

    //On success we redirect the page to login.php
    echo '<script type="text/javascript">
		alert("YOU HAVE REGISTERED SUCCESSFULLY! :-)"); 						
		window.location="login.php"; 
		</script>';
    
    $stmt->close();
}

$conn->close();

?>