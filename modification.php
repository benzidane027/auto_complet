<?php
if (isset($_POST["user_id"])) {
    
    $user_id = $_POST["user_id"];
    $resault = (new mysqli("127.0.01", "root", "@mine1997Amine", "tp"))->query("select * from tab where id=$user_id")->fetch_all();
    if ($resault) {
        $user_name = $resault[0][1];
        $user_email = $resault[0][2];
    } else
        die("user not found");
} 
else
   header("location:search.php");
?>
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
    <h1>modification</h1>
    <div class="log_in">
<form action="aplly_mod.php" method="post">
        <span>user id: <?php echo $user_id; ?> </span>
        <br>
        name
        <input type="text" disabled name="user_id" value="<?php echo $user_id; ?>">

        <input type="text" name="new_user_name" value="<?php echo $user_name; ?>">
        <br>
        email
        <input type="text" name="new_user_email" value="<?php echo $user_email; ?>">
        <br>
        <div>
        <button>aplly</button>
        </div>
    </form>
    </div>
</body>

</html>