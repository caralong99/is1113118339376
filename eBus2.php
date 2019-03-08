<?php
session_start();
$fullNameValue = "";
$phoneNumber="";
$totalValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum']= $phoneNumber;
$_SESSION['txtTotal'] = $totalValue2;

/*
 * Allocate the mobile number seesion variable to a textbox
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <style>
            body {
    backround-color: aqua;
 background-image: url(img/gradient.jpeg);
    background-size: 100%;
}
            </style>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value=""></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type="text" id="txtNum" name="txtNum" value=""
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" pattern="[0-9]{4}"></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
               </center>
                <center>
                  <input type="submit" name="btnContinue" onclick="" value="Continue" />  
                </center>
       </div>
     </form>
    </body>
</html>