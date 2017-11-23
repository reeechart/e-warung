// e-Warung global javascript

function goBack() {
	window.history.back();
}

function cancelOrder() {
	if (confirm("Are you sure want to cancel this order?") == true) {
		window.location = "myorderscancelled.php";
	}
}

function editLocation() {
  window.location = "edit-location.php";
}