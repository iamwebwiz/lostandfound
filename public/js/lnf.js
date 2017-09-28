$(function(){
	$('a#deleteItem').on('click', function(event) {
		var result = confirm('Are you sure you want to delete this item?');
		if (result) {
			return true;
		}
		return false;
	});

	$('#otherLocations').hide();

	$('#country').on('change', function() {
        var selection = $(this).val();
        switch (selection) {
            case "Nigeria":
                $('#nigerianLocations').slideDown(400);
                $('#otherLocations').slideUp(400);
                break;
            default:
                $('#nigerianLocations').slideUp(400);
                $('#otherLocations').slideDown(400);
                $('#otherLocation').focus();
                break;
        }
    });
});
