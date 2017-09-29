$(function(){
	$('a#deleteItem').on('click', function(event) {
		var result = confirm('Are you sure you want to delete this item?');
		if (result) {
			return true;
		}
		return false;
	});

    $('#country').on('change', function(){
        $('#location').focus();
    });
});
