<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
$phoneNumber="";
$emailAddress="";
/*Create a session for the mobile number*/
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $phoneNumber;
$_SESSION['txtEmail'] = $emailAddress

/*Allocate the mobile number session variable to a textbox*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Personal Details </title>
        <style>
             body{
                background-color: #ccffff;
                background-size: 100%;
            }
            h1{
                text-align: center;
                font-family: serif;
                font-size: 30px;
            }
            p {
                font-family: serif;
                font-size: 15px;
                
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #cccccc;
              }

            li {
                float: left;
              }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
              }

            li a:hover:not(.active) {
                background-color: lightcoral;
              }

            .active {
                background-color: red;
              }
              .btnContinue{
                  color: white;
                  background: green;
                  height: 30px;
                  width: 300px;
              }
              .textbox{
                  width: 600px;
                  height: 30px;
              }
        </style>
    </head>
    <body>
        <nav>
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cv.html">My C.V.</a></li>
                <li><a href="interests.html">Interests</a></li>
                <li><a href="consulting.html">Consulting</a></li>
            </ul> 
        </nav>
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <table>
                        <tr>
                            <td><b></b></td>
                            <td><h3>Enter in your details below</h3></td>
                        </tr>
                    </table>
                    <table cellspacing="10">
                        
                        <tr>
                            <td><b>Name:</b></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="txtName" class="textbox" name="txtName" value="" required/></td>
                        </tr>
                        <tr>
                            <td><b>Phone Number:</b></td>
                        </tr>
                        <tr>  
                            <td><input type="tel" id="txtNum" name="txtNum" class="textbox" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Please enter in the format: 123-456-7890" required/>
                                
                            </td>
                        </tr>
                        <tr>
                            <td><b>Email:</b></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="txtEmail" name="txtEmail" class="textbox" value="" required/></td>
                        </tr>
                        <tr>
                            <td><b>PIN:</b></td>
                        </tr>
                        <tr>
                            <!--Gotten From https://www.w3schools.com/howto/howto_js_password_validation.asp-->
                            <td><input type="password" id="psw" name="psw" class="textbox" pattern="[0-9][0-9][0-9][0-9]" 
                                       title="Must enter a four digit pin" required></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
                    </table>
                </center>
                <center> 
                    <input type="submit" name="btnContinue" id="btnContinue" class="btnContinue" onclick="" value="Proceed with Purchase"/>
                </center>        
            </form>
        </div>
    </body>
</html>