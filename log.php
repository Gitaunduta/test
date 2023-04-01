<?php

// Connect to the database
include "conn.php";

// function validate($data)
// {
//     $data=trim($data);
//     $data=stripslashes($data);
//     $data=htmlspecialchars($data);
//     return $data;
// }

//Check if the submit button has been clicked
if(isset($_POST["submit"]))
{
    //Get the details keyed in by the user
    $user = $_POST["email"];
    $enc = md5($_POST["pass1"]);
    
    //Check if the user field is empty
    if(empty($user))
    {
        header("Location:register.php? error username is required");
        exit();
    }
    //Check if the password field is empty
    else if(empty($enc))
    {
        header("Location:register.php? error password is required");
        exit();
    }
    // else query the database to get the user's information
    else{
        $sql=" SELECT * FROM userstbl  WHERE  email='$user' AND pasword= '$enc' limit 1";

        $result=$conn->query($sql);
    
        $count = $result->num_rows;

        // Check the number of rows from the query is > 0
        if($result->num_rows > 0)
        {
            $rows=$result->fetch_assoc();

            if($rows['email']===$user  && $rows['pasword']==$enc)
            {
                echo "welcome!  ".$rows['fname'];
            }
        }
        //If there are no rows print the error message below
        else
        {
            echo "wrong cridentials please enter the correct information";
        }
    }
}
?>


