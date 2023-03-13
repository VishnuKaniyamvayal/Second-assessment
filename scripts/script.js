$(document).ready(function(){
	//constanats

	var amount_margin = 2000;
	var date_regex=/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
	
	// adding a custom method for validating only letters in name section 
 	jQuery.validator.addMethod("lettersonly", function(value, element) 
	{
 return this.optional(element) || /^[a-z," ",A-Z]+$/i.test(value);
 }, "Letters and spaces only please"); 


 	//adding method for date validation in text form

 jQuery.validator.addMethod("validDate", function(value, element){
	var regex = date_regex;
	return this.optional(element) || regex.test(value) ;
}, "Please enter a valid date in the format DD/MM/YYYY");


    $('#visitor_details_form').validate({
        rules:{
			first_name:{
				lettersonly:true,
				required:true,
				maxlength:120,
			},
			last_name:{
				required:true,
				maxlength:120,
				lettersonly:true,
			},
			pass_number:{
				required:true,
				maxlength:10,
				minlength:10,
			},
			email:{
				required:true,
				email:true,
			},
			phone:{
				required:true,
				number:true,
				maxlength:10,
				minlength:10,
			},
			gender:{
				required:true,

			},
			date_of_birth:{
				required:true,
				validDate:true,

			},
			location_visited:{
				required:true,
			},
			date_of_visit:{
				required:true,
			},
			amount_of_purchase:{
				required:true,
				maxlength:10000,
			},
			no_of_items:{
				required:true,
				number:true,
				maxlength:10000,
			},
			net_amount:{
				required:true,
			},
			agree_terms:{
				required:true,
			}
        },
		messages:{
			first_name:{
				required:"Please Enter your First Name",
				maxlength:"Exceeded Limit",
			},
			last_name:{
				required:"Please Enter your Last Name",
				maxlength:"Exceeded limit",
			},
			pass_number:{
				required:"Please Enter your Last Name",
				maxlength:"Pass number can contain exactly 10 alphanumeric digits",
				minlength:"Pass number can contain exactly 10 alphanumeric digits",
			},
			email:{
				required:"Please enter your Email",
				email:"Please Enter a valid Email",
			},
			phone:{
				required:"Please Enter your phone number",
				number:"No alphabets or special characters are allowed",
				maxlength:"Phone number contain exactly 10 digits",
				minlength:"Phone number contain exactly 10 digits",
			},
			gender:{
				required:"Please select you gender",

			},
			date_of_birth:{
				required:"please Enter your DOB",
				date:"date format DD/MM/YY",


			},
			location_visited:{
				required:"Please Select One visited Place",
			},
			date_of_visit:{
				required:"Please select the visited date",
			},
			amount_of_purchase:{
				required:"Enter amount of purchase",
				maxlength:"Exceeded limit"
			},
			no_of_items:{
				required:"Please enter the number of items",
				number:"Enter value in numbers",
				maxlength:"Exceeded limit",
			},
			net_amount:{
				required:"Click the button and calculate the value"
			},
			agree_terms:{
				required:"",
			}
        }
    }
	
    )

	//function to change color of the submit button

	$('input:checkbox').change(function(){
		if($(this).is(":checked")) { // if the agree terms checkbox is checked color is blue
			$('#submit_button').addClass("btn-primary");
			$('#submit_button').removeClass("btn-secondary");
		} else { // else the color is gray
			$('#submit_button').addClass("btn-secondary");
			$('#submit_button').removeClass("btn-primary");
		}
	})

	// script for calculating net amount

	$('#calculate_button').click(function(){
		$amount_of_purchase = $('#amount_of_purchase').val();
		$location = $('#location_visited').val()
		console.log($amount_of_purchase)
		console.log($location)
		if(($amount_of_purchase>=2000) && ($location == "main_campus"))
		{	
			 $net_amount = (parseFloat($amount_of_purchase) * parseFloat(0.9))
			 console.log("main campus")
			$("#net_amount").val(parseInt($net_amount)) 	
		}
		else if(($amount_of_purchase>=2000) && ($location == "a_block"))
		{	
			 $net_amount = (parseFloat($amount_of_purchase) * parseFloat(0.85))
			 console.log("a")
			 $("#net_amount").val(parseInt($net_amount)) 	
		}		
		else if(($amount_of_purchase>=2000) && ($location == "b_block"))
		{	
			 $net_amount = (parseFloat($amount_of_purchase) * parseFloat(0.95))
			 console.log("v")
			$("#net_amount").val(parseInt($net_amount)) 	
		}
		else if(($amount_of_purchase>=2000) && ($location == "c_block"))
		{	
			 $net_amount = (parseFloat($amount_of_purchase) * parseFloat(0.95))
			 console.log("c")
			$("#net_amount").val(parseInt($net_amount)) 	
		}
		else {
			$net_amount = $amount_of_purchase;
			$("#net_amount").val($net_amount)

		}
		

	})
	

})