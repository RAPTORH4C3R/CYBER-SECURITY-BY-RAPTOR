var form = document.querySelector('form');
var error = document.querySelector('#error');

form.addEventListener('submit', function(event) {
	event.preventDefault(); // Prevent form from submitting

	var username = document.querySelector('#username').value;
	var password = document.querySelector('#password').value;

	if (username === 'anju123' && password === 'raptor000') {
		error.innerHTML = '';
		window.location.href = 'dashboard.html'; // Redirect to dashboard page
	} else {
		error.innerHTML = 'Invalid username or password.';
	}
});
