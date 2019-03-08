<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
    backround-color: aqua;
 background-image: url(img/gradient.jpeg);
    background-size: 100%;
}

h1 {
color: white;
}
        </style>
    <h1 style="font-size:35px;" align="center">Your Receipt</h1>
    </head>
<body>
<!-- //Starting the session to get the session variable from the last page-->
<?php
session_start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$phoneNumber = $_POST['txtNum'];
 echo "the name is: ".$fullNameValue.".";
 echo "<br></br>";
echo "the total value is ".$phoneNumber.".";
 echo "<br></br>";
echo "the total value is ".$totalValue.".";
?>

</body>
</html>
