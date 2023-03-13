<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Visitor Details form</title>
	<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
</head>


<body>
	<!-- Header Section-->

	<div class="header">
		<img id="logo" src="assets/logo.jpg" alt="ERROR LOADING LOGO">
		<h2>Visitor Details Form</h2>
	</div>


	<!-- FORM Section-->

	<form id="visitor_details_form" action="submit_page.php" method="POST">

		<div class="row ">
			<!--FIRST NAME type:TEXT-->
			<div class="form-group col-md-4">
				<label for="first_name">First Name:<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="first_name" placeholder="Your First Name" name="first_name"
					autofocus>
			</div>
			<!--LAST NAME type:TEXT-->
			<div class="form-group col-md-4">
				<label for="last_name">Last Name:<sup class="required"> *</sup></label>
				<input type="text" class="form-control" id="last_name" placeholder="Your Last Name" name="last_name">
			</div>
			<!--VISITOR PASS NUMBER type:TEXT-->
			<div class="form-group col-md-4">
				<label for="pass_number">Visitor Pass Number:<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="pass_number" placeholder="10 digit pass no"
					name="pass_number">
			</div>

		</div>
		<div class="row  mt-2">
			<!--EMAIL ID type:TEXT-->
			<div class="form-group col-md-4">
				<label for="email">Your Email ID:<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="email" placeholder="Your Email" name="email">
			</div>
			<!--PHONE NUMBER type:TEXT-->
			<div class="form-group col-md-4">
				<label for="phone">Your Phone No:<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="phone" placeholder="94XX87689" name="phone">
			</div>
			<!--GENDER type:DROPDOWN-->
			<div class="select_dropdown col-md-4 col">
				<label for="gender" id="select_label">Gender:<sup class="required">*</sup></label>
				<select class="form-select" name="gender" id="gender">
					<option selected value="">Select Your gender</option>
					<option value="male">Male</option>
					<option value="female">female</option>
					<option value="other">Other</option>
				</select>
			</div>
		</div>
		<div class="row  mt-2 ">
			<!--DATE OF BIRTH type:DATE-->
			<div class="form-group col-md-4" id="dob">
				<label for="date_of_birth">Date Of Birth<sup class="required"> *</sup></label>
				<input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="DD/MM/YYYY">
			</div>
			<!--VISITED LOCATION type:DROPDOWN-->
			<div class="select_dropdown col-md-4 col">
				<label for="location_visited" id="select_label">Location you have visited:<sup
						class="required">*</sup></label>
				<select class="form-select" name="location_visited" id="location_visited">
					<option selected value="">Select Location</option>
					<option value="main_campus" selected >Main Campus</option>
					<option value="a_block">A block</option>
					<option value="b_block">B block</option>
					<option value="c_block">C block</option>
				</select>
			</div>
			<!--VISITED LOCATION type:DROPDOWN-->
			<div class="form-group col-md-4" id="dov">
				<label for="date_of_visit">Date Of visit<sup class="required"> *</sup></label>
				<input type="date" class="form-control" id="date_of_visit" name="date_of_visit">
			</div>
		</div>
		<div class="row  mt-2 ">
			<!--AMOUNT OF PURCHASE type:TEXT-->
			<div class="form-group col-md-6">
				<label for="amount_of_purchase">Amount of purchase<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="amount_of_purchase" placeholder="Enter amount in  INR"
					name="amount_of_purchase">
			</div>
			<!--NO OF ITEMS type:TEXT-->
			<div class="form-group col-md-6">
				<label for="no_of_items">Number Of Items:<sup class="required">*</sup></label>
				<input type="text" class="form-control" id="no_of_items" placeholder="Ex:12" name="no_of_items">
			</div>
		</div>
		<div class="row  mt-2 ">
			<!--NET AMOUNT type:READONLY TEXT -->
			<div class="form-group col-md-6 mx-auto ">
				<label for="net_amount">Net Amount</label>
				<input type="text" class="form-control" id="net_amount" placeholder="" value="" name="net_amount" readonly>
				<input class="btn btn-info " type="button" value="Calculate" id="calculate_button">
				<br>
			</div>

		</div>


		<div class="form-check" id="terms">
			<input class="form-check-input" type="checkbox" value="" id="agree_terms" name="agree_terms">
			<label class="form-check-label" for="agree_terms">Agree to <a
					href="https://www.magloft.com/publications/6474/terms">terms and conditions</a></label><br>
		</div>
		<button type="submit" class="btn btn-secondary" id="submit_button">Submit</button>
	</form>
	<!--END OF FORM-->


</body>
<script type="text/javascript" src="scripts/jQuery.js"></script>
<script type="text/javascript" src="scripts/jQuery_validate.min.js"></script>
<script type="text/javascript" src="scripts/moment.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

</html>