/* validate.js
 *
 * This file contains all of the code for the validation
 * of all input to the site.
 */




// Validate the input to the login form.
// Emails must conform to the proper format of an email address.
// Passwords must be at least 8 characters long and contain no spaces.
function loginValidation(event) {

	// Get form data
	//var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	// Is the form data considered valid input?
	var valid = true;

	// Regular expressions
	//var username_v = /^\w+$/;		// Only word characters
	var email_v = /^(www\.)?\w+@\w+\.\w{2,3}$/;	// Proper email format
	var password_v = /^\S{8,}$/;				// Minimum 8 characters, no spaces

	// Error messages
	var emailMessage = document.getElementById("email_message");
	emailMessage.innerHTML = "";
	var passwordMessage = document.getElementById("password_message");
	passwordMessage.innerHTML = "";
	
	
	// Test the username input
	/*
	if (!username_v.test(username)) {
		if (username.length == 0) {
			usernameMessage.innerHTML = "Username cannot be blank.<br />";
		}
		else {
			usernameMessage.innerHTML = "Usernames may only contain word characters and have no spaces.<br />";
		}

		valid = false;
	}
	*/

	// Test the email input
	if (!email_v.test(email)) {
		emailMessage.innerHTML = "Email is not of the proper format.<br />";

		valid = false;
	}

	// Test the password input
	if (!password_v.test(password)) {
		if (password.length < 8) {
			passwordMessage.innerHTML = "Password must be at least 8 characters.<br />";
		}
		else {
			passwordMessage.innerHTML = "Password cannot contain spaces.<br />";
		}

		valid = false;
	}


	// If the input is not valid then prevent submition
	if (!valid) {
		event.preventDefault();
	}
}




// Validate the input to the signup form.
// Emails must conform to the proper format of an email address.
// Usernames must contain no spaces or non-word characters.
// Date of birth must be of dd/mm/yyyy format.
// Passwords must be at least 8 characters long and contain no spaces.
// Password confirmation must match the first password input.
function signupValidation(event) {

	// Get form data
	var username = document.getElementById("username").value;
	var email = document.getElementById("email").value;
	var birthday = document.getElementById("birthday").value;
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirm_password").value;

	// Is the form data considered valid input?
	var valid = true;

	// Regular expressions
	var username_v = /^\w+$/;					// Only word characters
	var email_v = /^(www\.)?\w+@\w+\.\w{2,3}$/;	// Proper email format
	var birthday_v = /^\d{2}\/\d{2}\/\d{4}$/;	// dd/mm/yyyy format
	var password_v = /^(?=.*\d+)\S{8,}$/;		// Minimum 8 characters, at least one non-letter

	// Error messages
	var usernameMessage = document.getElementById("username_message");
	usernameMessage.innerHTML = "";

	var emailMessage = document.getElementById("email_message");
	emailMessage.innerHTML = "";

	var birthdayMessage = document.getElementById("birthday_message");
	birthdayMessage.innerHTML = "";

	var passwordMessage = document.getElementById("password_message");
	passwordMessage.innerHTML = "";

	var confirmMessage = document.getElementById("confirm_message");
	confirmMessage.innerHTML = "";


	// Test the username input
	if (!username_v.test(username)) {
		if (username.length == 0) {
			usernameMessage.innerHTML = "Username cannot be blank.<br />";
		}
		else {
			usernameMessage.innerHTML = "Usernames may only contain word characters and have no spaces.<br />";
		}

		valid = false;
	}

	// Test the email input
	if (!email_v.test(email)) {
		emailMessage.innerHTML = "Email is not of the correct format.<br />";

		valid = false;
	}

	// Test the birth date input
	if (!birthday_v.test(birthday)) {
		birthdayMessage.innerHTML = "Birth date is not of the correct format.<br />";

		valid = false;
	}

	// Test the password input
	if (!password_v.test(password)) {
		if (password.length < 8) {
			passwordMessage.innerHTML = "Password must be at least 8 characters.<br />";
		}
		else {
			passwordMessage.innerHTML = "Password must have at least one non-letter.<br />";
		}

		valid = false;
	}

	// Test the confirmed password input
	if (confirmPassword != password) {
		confirmMessage.innerHTML = "Passwords do not match.<br />";

		valid = false;
	}


	// If the input is not valid then prevent submition
	if (!valid) {
		event.preventDefault();
	}
}




// Validate the input to the post creation form.
// Posts must not be blank or exceed 250 characters.
function postValidation(event) {

	// Get post content
	var post = document.getElementById("post").value;

	// Is the input valid?
	var valid = true;

	// Error message
	var postMessage = document.getElementById("post_message");
	postMessage.innerHTML = "";


	// Validate the post input
	if (post.length == 0) {
		postMessage.innerHTML = "Posts cannot be blank.";

		valid = false;
	}
	else if (post.length > 250) {
		postMessage.innerHTML = "Posts cannot exceed 250 characters.";

		valid = false;
	}

	if (!valid) {
		event.preventDefault();
	}
}