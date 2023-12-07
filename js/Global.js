function search() {
	const searchItem = document.getElementById('SearchItem').value;
	const display1 = document.getElementById('display1'); // Assuming 'display1' is an element ID
	const display2 = document.getElementById('display2'); // Assuming 'display2' is an element ID
	const message = document.getElementById('error-message');

	if (searchItem === "") {
		message.textContent = "Please fill the item";
	} else {
		
		$.ajax({
			url: '../ajax/search.php',
			method: 'POST',
			data: {
				searchItem: searchItem
			},
			dataType: 'json',
			success: function (response) {
				if (response && response.type === 'success' && response.display1 && response.display2) {
					display1.textContent = response.display1;
					display2.textContent = response.display2;
					$('#SearchModal').modal('show');
				}else {
					message.textContent = response.message;
				}
			},
			error: function (xhr, status, error) {
			message.textContent = "error found";
			}
		});
	}
}
