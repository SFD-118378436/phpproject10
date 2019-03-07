<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <style>
            body{
                background-color: #ccffff;
                background-size: 100%;
            }
            h1{
                text-align: center;
                font-family: serif;
                font-size: 45px;
            }
            p {
                font-family: serif;
                font-size: 25px;
                
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
                color: black;
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
       <center>
           <!--Starting the session variable to get the variable from the last page-->
           <h1>Purchase Receipt </h1>
           <br><br>
           <p>       
               <?php
               session_start();
               $totalValue2 = $_POST['txtTotal'];
               $fullNameValue = $_POST['txtName'];
               $phoneNumber = $_POST['txtNum'];
               $emailAddress = $_POST['txtEmail'];
               echo "<b>The Name is</b> : ".$fullNameValue.".";
               echo "<br></br>";
               echo "<b>The total value is</b> $".$totalValue2.".";
               echo "<br></br>";
               echo "<b>The phone number is :</b> ".$phoneNumber.".";
               echo "<br></br>";
               echo "<b>The Email Address is :</b> ".$emailAddress.".";
               ?>
           </p>
       </center>
    </body>
</html>