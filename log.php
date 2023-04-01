<?php

include "conn.php";


if($_POST["submit"])
{
    function validate($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    echo $user=$_POST["email"];
    echo $enc=md5($_POST["pass1"]);
    echo "<br>";
    // echo $enc=md5($pass);
    // if(empty($user))
    // {
    //     header("Location:register.php? error username is required");
    //     exit();
    // }

    // else if(empty($pass))
    // {
    //     header("Location:register.php? error password is required");
    //     exit();
    // }
    //  else{
    //         $sql=" SELECT * FROM userstbl  WHERE  email='$user' AND pasword= '$enc' limit 1";

    //         $result=$conn->query($sql);
    
    //         $count = $result->num_rows;
    //         if($count > 0) echo "build";
    //         else echo "failed";
            // if($result->num_rows > 0)
            // {
            //     echo "done";
                // $rows=$result->fetch_assoc();

                // if($rows['email']===$user  && $rows['pasword']==$enc)
                // {
                //     echo "welcome!  ".$rows['fname'];
                // }
             

            // }
            // else{
            //     echo "wrong cridentials please enter the correct information";
            // }
        // }
}
?>


