<?php
session_start();


if (isset($_POST["btn"])) {
    ?><pre><?php var_dump($_SESSION); ?></pre><?php 
    
    // 保存するとき
    if ($_POST["btn"] === "1") {
        rename("./tmp/" . $_SESSION["save_file_name"], "./image/" . $_SESSION["save_file_name"]);
    } else {
        unlink("./tmp/" . $_SESSION["save_file_name"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <img src="./tmp/<?php echo $_SESSION["save_file_name"]; ?>">
    保存しますか
    
    <form action="next.php" method="post">
        <label><button name="btn" value="1">YES</button></label>
        <label><button name="btn" value="0">NO</button></label>
    </form>
</body>
</html>