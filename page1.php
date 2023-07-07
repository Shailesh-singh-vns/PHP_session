<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["user_name"]="shailes singh";
    $_SESSION["address"] = "lucknow U.P, India";
    echo "hi";
    
    
    ?>
    
</body>
</html>