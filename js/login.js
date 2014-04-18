$('#loginform input[type="text"]').attr('placeholder', 'Username');
$('#loginform input[type="password"]').attr('placeholder', 'Password');

$('#loginform label[for="user_login"]').contents().filter(function() {
	return this.nodeType === 3;
}).remove();
$('#loginform label[for="user_pass"]').contents().filter(function() {
	return this.nodeType === 3;
}).remove();

$('input[type="checkbox"]').click(function() {
	$(this+':checked').parent('label').css("background-position","0px -20px");
	$(this).not(':checked').parent('label').css("background-position","0px 0px");
});


$(function(){

	// Checking for CSS 3D transformation support
	$.support.css3d = supportsCSS3D();

	var formContainer = $('#formContainer');

	// Listening for clicks on the ribbon links
	$('.flipLink').click(function(e){

		// Flipping the forms
		formContainer.toggleClass('flipped');

		// If there is no CSS3 3D support, simply
		// hide the login form (exposing the recover one)
		if(!$.support.css3d){
			$('#login').toggle();
		}
		e.preventDefault();
	});

	formContainer.find('form').submit(function(e){
		// Preventing form submissions. If you implement
		// a backend, you will want to remove this code
		e.preventDefault();
	});

	// A helper function that checks for the
	// support of the 3D CSS3 transformations.
	function supportsCSS3D() {
		var props = [
			'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
		], testDom = document.createElement('a');

		for(var i=0; i<props.length; i++){
			if(props[i] in testDom.style){
				return true;
			}
		}

		return false;
	}
});