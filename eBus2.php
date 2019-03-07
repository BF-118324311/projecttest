<?php
session_start();
$fullNameValue = "";
$phoneNumber = "";
$totalValue = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtNum'] = $phoneNumber;
$_SESSION['txtTotal'] = $totalValue;

/*
 * Allocate the mobile number seesion variable to a textbox
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        
         <style> 
	#roundcorner {
		  border-radius: 25px;
		  border: 3px solid #000000;
		  padding: 20px; 
		  width: 350px;
		  height: 250px;
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
        
        .button {
            background-color: #4d4dff;
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
            <form name="Details" method="post" action="ebus3.php">
                <h1><u>Enter in your details below:</u></h1>
                <hr />
                  <div id="roundcorner">
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="tel" id="txtNum" name="txtNum" 
                                       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                       title="123-456-7890" required></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" 
                                       pattern="[0-9]{4}"
                                       title="Must be 4 digit pin (Numbers ONLY)" required></td>
                        </tr>
                        <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
               </center>
                <center>
                  <input class="button" type="submit" name="btnContinue" onclick="" value="Continue"/>  
                </center>
       </div>
     </form>

      
    </body>
</html>