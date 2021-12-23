<?php
    
        
        $con = new mysqli("127.0.01", "root", "@mine1997Amine", "tp");
        
        $user_id = $_POST["user_id"];
        $new_user_name = $_POST["new_user_name"];
        $new_user_email = $_POST["new_user_email"];

        $resault = $con->query("update tab set name='$new_user_name',email='$new_user_email' where id=$user_id");
        if ($resault) {
            echo "modification appled";
        } else
            echo "error";
    
    ?>