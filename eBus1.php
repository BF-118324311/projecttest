<!-- Creating a session variable and assigning it to txtTotal-->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE>
<html lang="en" xmlns="http.//ww.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Shop</title>
        <link rel="stylesheet" href="style.css" type="text/css" />

        
       <style> 
	#roundcorner {
            border-radius: 25px;
            border: 3px solid #000000;
            padding: 20px; 
            width: 500px;
            height: 450px;
            text-align: center;
            background-color: white;
            max-width: 500px;
            margin: auto;
	}
        
         
        #background {
            background-image: url("assets/images/ebus1bg.png");
            height: 1000px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        
        h1 {
            color: white;
            text-align: center;
        }
        
      .button1 {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
        
             .button2 {
            background-color: #99ccff;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
      
              .button3 {
            background-color:  #ff9933;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
          }
          
          
          
          
          
        </style>
        
    </head>
    
    <body id="background">
        <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
                <h1><u>Consulting Services</u></h1>
                <hr />
                <div id="roundcorner">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b><u>Consulting Service:</u></b></td>
                        </tr>
                        <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things (Robots) @ $2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                        </tr>
                            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center><table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr><td>-Discount @10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                        </tr>
                        <tr>
                            <td>+VAT @20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly</td>
                        </tr>
                        </table>
                </center>
           
            <center>
                <br><br>
                <input  class="button1" type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate"/>
                <input  class="button2" type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <br>
                <input  class="button3" type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            </div>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub() {
                //Assigning variablesto the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                
                // If radio buttons are clicked, values are assigned
                if (document.getElementById("Blockchain").checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById("AutonomousThings").checked) {
                    document.intCalc.txtSubTot.value = AutonomousThings;
                    subAmount = AutonomousThings;
                    calculation(subAmount);
                }
                else if (document.getElementById("ImmersiveExperience").checked) {
                    document.intCalc.txtSubTot.value = ImmersiveExperience;
                    subAmount = ImmersiveExperience;
                    calculation(subAmount);
                }
            }
            //function for calculating the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * 0.1);
                var vatCalc = parseFloat(subTotal * 0.2);
                var total = parseFloat(subTotal - discCalc + vatCalc);
                
                //Instering them into the correct feilds 
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear() {
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVat").value="";
                document.getElementById("txtTotal").value="";
            }
            </script>
    </body>
</html>