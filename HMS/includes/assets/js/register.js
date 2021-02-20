$(document).ready(function(){
	$('#Logintext').click(function(){
		$('#LoginForm').hide();
		$('#RegisterForm').show();
	});

	$('#Registertext').click(function(){
		$('#LoginForm').show();
		$('#RegisterForm').hide();
	});
});