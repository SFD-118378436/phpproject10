<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Shop Calculator</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
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
                color: Black;
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
           /*code for button design*/     
            }
            .button3 {
                background: #0069d9;
                color: black;
                height:30px;
                width:300px;
            }
            .button{
                background: green;
                color: white;
                height:30px;
                width:150px;
            }
            .button2{
                background: white;
                color: black;
                height:30px;
                width:150px;
                border: 2px solid #FF0000;
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
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1>Shop Calculator</h1>    
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Select a Consulting Service</b></td> 
                </tr>
                <tr>
                    <td>Blockchain @$1000</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" required/></td>
                </tr>
                <tr>
                    <td>Autonomous Things @$2000</td>
                    <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" required/></td>
                </tr>
                <tr>
                    <td>Immersive Experience @$3000</td>
                    <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" required/></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                <!--All the textboxes-->
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 40%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
                <table cellspacing="30">
                    <tr><td><input type="submit" name="btnProceed" id="btnProceed" class="button3" onclick="" value="Add to Shopping Cart"/></td>
                </tr>
                <tr><td> <input type="button" name="btnCalc" id="btnCalc" class="button" onclick="calcSub()" value="Calculate Cost"/>
                        <input type="button" name="btnClear" id="btnClear" class="button2" onclick="AmountClear()" value="Clear Cost"/></td></tr>
                </table>
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                //function for calculating each price
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                    var Immersive = parseFloat(document.getElementById('Immersive').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calcDispVatTotalDisc(subAmount);
                        
                    }
                   else if (document.getElementById('Autonomous').checked) {
                        document.intCalc.txtSubTot.value = Autonomous;
                        subAmount = Autonomous;
                        calcDispVatTotalDisc(subAmount);
                        
                    }
                    else if (document.getElementById('Immersive').checked) {
                        document.intCalc.txtSubTot.value = Immersive;
                        subAmount = Immersive;
                        calcDispVatTotalDisc(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calcDispVatTotalDisc(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>
 








