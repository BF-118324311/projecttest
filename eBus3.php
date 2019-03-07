<!DOCTYPE html>
<html>
    <head>
        
       <style> 
	#roundcorner {
		  border-radius: 25px;
		  border: 3px solid #000000;
		  padding: 20px; 
		  width: 250px;
		  height: 300px;
                  text-align: center;
                  max-width: 500px;
                  margin: auto;
                  background-color: white;
	}
        
        
        #background {
            background-image: url("assets/images/ebus3bg.jpg");
            height: 1000px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
         h1 {
            text-align: center;
        }
        

	</style>    
        
        
        
   <title>Receipt</title>
    </head>
    
<body id="background">
<!-- //Starting the session to get the session variable from the last page-->
<div>
    
<?php
session_start();
$totalValue = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$phoneNumber = $_POST['txtNum'];
echo '<h1><u>Receipt</u></h1>';
echo '<hr />';
echo '<div id="roundcorner">';
echo '<h3><u>Receipt:</u></h3>';
echo "<br></br>";
echo "Name: ".$fullNameValue.".";
echo "<br></br>";
echo "Phone Number: ".$phoneNumber.".";
echo "<br></br>";
echo "Total value: $".$totalValue.".";
echo '</div>';

?>
    
</div>

</body>
</html>