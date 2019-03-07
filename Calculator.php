<!Doctype html> 
<html>


<head>
	<title>Calculator</title>

	<script language="javascript" type="text/Javascript">

		<!-- Assigning values to the radio buttons-->
		function subTotal() {
			// Enter in prices here
			var x = 5;
			var y = 15;
			var p = x + y * 12;
			var b = y * 12;
			
			if (document.getElementById('basicProgram').checked) {
				// basic package is checked 
				document.calculator.total.value = b;
				
			} else if (document.getElementById('proProgram').checked) {
				// pro package is checked 
				document.calculator.total.value = p;
				
			}
		}

		<!--Calculations
		function calcDisc() {
			var subTot = document.calculator.total.value;
			var discTotal = ((subTot /100) *10);
			document.calculator.discount.value = discTotal;
		}

		function calcTotal() {
			var subTott = document.calculator.total.value;
			var discTotal = document.calculator.discount.value;
			
			var wholeTotal = (subTott - discTotal);
			
			document.calculator.wholeTotal.value = wholeTotal;
		}

	</script>


	<style>
	
		body {
		  background-color: #ccccff;
		}

		form {
		  border-style: double;
		  border-width: 10px;
		  border-radius: 50%;
		}
		
	</style>


</head>


<body>

	<div style="text-align:center">
	<!-- Opening a HTML form-->
		<form name="calculator">

		<!--User fills out form here-->

		</br>
		<input type="radio" name="programType" id="basicProgram" value="Basic" />Basic
		<input type="radio" name="programType" id="proProgram" value="Pro" checked />Pro


		<!-- Here result will be displayed -->

		<br/>
		Subtotal: <input type="text" name="total">
		<br>
		<input type="button" value="Subtotal" onclick="javascript:subTotal();">
		<br/>

		Discount: <input type="text" name="discount">
		<br>
		<input type="button" value="Discount" onclick="javascript:calcDisc();">
		<br/>

		Total: <input type="text" name="wholeTotal">
		<br>
		<input type="button" value="Total" onclick="javacript:calcTotal();">



		</form>
	</div>

</body>

</html>