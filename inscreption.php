<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_file/style.css">
</head>

<body>
    <h1>
        inscription
    </h1>
    <div class="log_in">
        <form action="" method="post">
            id &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="user_id">
            <br> 
            name &nbsp;
            <input type="text" name="user_name">
            <br> 
            email &nbsp;
            <input type="text" name="user_email">
            <br> <br>
            <div>   
            <button>send</button>
            </div>

        </form>
    </div>
    <?php
    if (isset($_POST["user_id"])) {
        $con = new mysqli("127.0.01", "root", "@mine1997Amine", "tp");

        $user_id = $_POST["user_id"];
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];

        $sql = "insert into tab(id,name,email)values($user_id,'$user_name','$user_email')";

        $resault = $con->query($sql);
        if ($resault)
            /* if($con->errno!=1062)
                    echo "registred succsfully";
                else
                    echo "user id already exist";
                }*/
            echo "registred";
        else
            echo "error: bad user id";
        /*
            if ($resault) echo "succsuflly registred";
            else echo "succsuflly registred";
*/
    }

    ?>
</body>

</html>