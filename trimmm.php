<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="pswd">
        <input type="submit" >
    </form>

</body>
</html>

<?php
    
    if (isset($_POST['pswd'])) {
         $str = $_POST['pswd'];
         $salt = "$^%$^^$%^%^$^$^$^$^";
         $hash = $salt.$str.$salt;
        
         $key = trim($hash,$salt);

    }

   


?> 