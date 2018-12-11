$(document).ready(function(){
	$(".contactForm").submit(function(e){
		e.preventDefault(); // niet submitten

		var data = new FormData($(".contactForm")[0]); // data uitlezen

		// leegmaken error div
		$("#resultDiv").removeClass('d-none').html("<i class='fa fa-refresh fa-spin'></i>&nbsp;&nbsp;bezig met verwerken");

		// posten met ajax
		$.ajax({
			url: '/',
			type: 'POST',
			dataType: 'json',
			data: data,
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.success) {
					$("#resultDiv").html("<p class='alert alert-success'>Formulier verstuurd, ik neem binnenkort contact met je op!</p>");
					$(".contactForm")[0].reset(); // reset form
					$("#filename").html(""); // reset upload
				} else {
					console.log(response);
					$("#resultDiv").html("<p class='alert alert-danger'>Captcha is verplicht</p>");
				}
			}
		});
	});
});