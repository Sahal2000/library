<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['visitor_name'];
       $Email = $_POST['visitor_email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['visitor_message'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "me.sahal2000@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>