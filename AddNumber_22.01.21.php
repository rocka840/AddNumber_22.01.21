<?php
session_start();
if(isset($_SESSION["sum"])){

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AddNumbers</title>
</head>
<body>

<form action="" method="get">
   type a number: <input name="input">
    <input type="submit" name="submit">
    <input type="button" name="delete">
</form>

<?php
if(isset($_GET["input"])){
    $number = $_GET["number"];
    $_SESSION["sum"] += $number;
}
if(isset($_GET["delete"])){
    session_destroy();
}

print "print" .$_SESSION["sum"];
?>

</body>
</html>