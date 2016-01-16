// Hides Off-Canvas menu after selecting a menu tab/item
(function() {
	$('#menu').on('click', function(){
		//$('#myCheckbox').prop('checked', true); // Checks it
		$('#myCheckbox').prop('checked', false); // Unchecks it
	});
})();
