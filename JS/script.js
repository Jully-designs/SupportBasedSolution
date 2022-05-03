$(document).ready(function(){
	$("#submit").click(function(e){
		e.preventDefault();
        // alert('yesss');
		$.ajax({
			url: "backend/scripts/contact_us.php",
			method: "POST",
			data: $("#contact_form").serialize(),
			beforeSend: function(){
				$("#submit").val("Sending...");
				$("#submit").attr("disabled", true);
			},
			success: function(data){
				if(data == "success"){
					// toastr.success('Your message has been sent successfully', 'Congratulations',{timeOut: 3000});
					// alert('Your message has been sent successfully');
					
					$("#my_modal").css("display", "block");
					setTimeout(function(){
						window.location.href = "contact.html"
					}, 5000);
				}else{
					// toastr.error("Error! "+ data);
					alert("Error! "+ data);
				}
				$("#submit").val("Send Message");
				$("#submit").attr("disabled", false);
			}
		})
	});
});