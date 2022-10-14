<?php

    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['Name'];
        $Email = $_POST['Email'];
        $Msg= $_POST['Msg'];

        if(empty($UserName)|| empty($Email) || empty($Msg))
        {
            header('location:index.php?error');
        }
        else{
            $to = "castillor9706@gmail.com";

            if(mail($to,$Msg,$Email))
            {
                header("location:contact.php?success");
            }

        }
    }
    else{
        header("location:contact.php");
    }

?>