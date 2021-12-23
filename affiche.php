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
    afficharge:
    </h1>
    <div>
<?php 
$resault=(new mysqli("127.0.01","root","@mine1997Amine","tp"))->query("select * from tab")->fetch_all();
    echo "<select class='myselect'>";
    echo "<option selected>-------------------------------- users ----------------------------</option> ";   
        foreach($resault as $item){
            echo "<option>". implode(' &nbsp; ',$item) ."</option>";
        }
    echo "</select>";
    ?>
    </div>
</body>
</html>
