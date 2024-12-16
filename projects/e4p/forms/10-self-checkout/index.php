<!-- Prompt user for 3 items
	Prompt for quanitity as well

Store the information in Variables.

Store tax slab in a Variable. 

Make templates that concatenate everything.  -->


<?php 

	$item1 = NULL;

	$item2 = NULL;

	$item3 = NULL;

	$quant1 = NULL;

	$quant2 = NULL;

	$quant3 = NULL;

	$isSubmitted = false;

	if (isset($_POST['submitted']) ) {

		$isSubmitted = true;

		if(isset($_POST['item-1']) ) {
			if($_POST['item-1'] > 0){
				$item1 = $_POST['item-1'];
			}

		}

		if(isset($_POST['quantity-1']) ) {
			if($_POST['quantity-1'] > 0){
				$quant1 = $_POST['quantity-1'];
			}

		}

		if(isset($_POST['item-2']) ) {
			if($_POST['item-2'] > 0){
				$item2 = $_POST['item-2'];
			}

		}

		if(isset($_POST['quantity-2']) ) {
			if($_POST['quantity-2'] > 0){
				$quant2 = $_POST['quantity-2'];
			}

		}

		if(isset($_POST['item-3']) ) {
			if($_POST['item-3'] > 0){
				$item3 = $_POST['item-3'];
			}

		}

		if(isset($_POST['quantity-3']) ) {
			if($_POST['quantity-3'] > 0){
				$quant3 = $_POST['quantity-3'];
			}

		}

		$sum1 = $item1 * $quant1;

		$sum2 = $item2 * $quant2;

		$sum3 = $item3 * $quant3;

		$subTotal = $sum1 + $sum2 + $sum3;

		$tax = $subTotal * 0.055; 

		$grandTotal = $subTotal + $tax;

		$templateSub = "Total for your items is " . $subTotal . "$.";

		$templateTax = "Tax on your items is " . $tax . "$.";

		$templateGrand = "Your final bill is " . $grandTotal . "$.";




	}



 ?>



<form method="POST" class='e4p-form self-checkout'>
	
	<h2> Self Checkout.</h2>
		
		<div class="item-form">

			<div class="form-field">
				<label for="item-1"> List the price of the first item. </label>

				<input type="number" name='item-1' min='0' required>
			</div>

	

			<div class="form-field">
				<label for="quantity-1">Enter the quantity of the item.</label>

			<input type="number" name='quantity-1' min='0' required>
			</div>


		</div>

		<div class="item-form">

		

			<div class="form-field">
				<label for="item-2">List the price of the second item.</label>

				<input type="number" name='item-2' min='0' required>
			</div>

			<div class="form-field">
				<label for="quantity-2">Enter the quantity of the item.</label>

				<input type="number" name='quantity-2' min='0' required>
			</div>

		</div>

		<div class="item-form">


			<div class="form-field">
				<label for="item-3">List the price of the third item.</label>

				<input type="number" name='item-3' min='0' required>
			</div>

			<div class="form-field">
				<label for="quantity-3">Enter the quantity of the item.</label>

				<input type="number" name='quantity-3' min='0' required>
			</div>


		</div>

		<button type='submit' name='submitted'>Submit</button>

		<?php if($isSubmitted) { ?>

		<output>

			<p> <?=$templateSub?></p>

			<p> <?=$templateTax?></p>

			<p> <?=$templateGrand?></p>


		</output>

		<?php } ?>

</form>