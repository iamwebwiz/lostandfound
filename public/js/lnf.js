$(function(){
	$('a#deleteCategory').on('click', function(event) {
		var result = confirm('Are you sure you want to delete this course?');
		if (result) {
			return true;
		}
		return false;
	});

	$('a#deleteOutline').on('click', function(event) {
		var result = confirm('Do you really want to delete this course outline?');

		if (result) {
			return true;
		}
		return false;
	});

	$('a#deleteCoursesCategory').on('click', function(event) {
		var result = confirm('Do you really want to delete this course category?');
		if (result) {
			return true;
		}
		return false;
	});

	$('a#cancelEnrollment').on('click', function() {
		var result = confirm('Do you really want to cancel your subscription to this course?');
		if (result) {
			return true;
		}
		return false;
	});
});