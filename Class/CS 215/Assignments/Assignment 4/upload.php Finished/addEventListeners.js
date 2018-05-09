// addEventListeners.js
//
// This file is where all event listeners
// will be attached to the documents.




// Get the file name of a webpage
function fileName() {
	var a = window.location.href;
	var b = a.lastIndexOf("/");
	return a.substr(b + 1);
}

// Get the file name of an image
function imageName(src) {
	var a = src.lastIndexOf("/");
	return src.substr(a + 1);
}




// Event listeners for login.php.
if (fileName() == "login.php") {

	// Event listener for the submition function of the login form.
	document.getElementById("login").addEventListener("submit", loginValidation, false);
}




// Event listeners for signup.php
else if (fileName() == "signup.php") {

	// Event listener for the submition function of the signup form.
	document.getElementById("signup").addEventListener("submit", signupValidation, false);
}




// Event listeners for post.php
else if (fileName() == "post.php") {

	// Event listener for the submition function of the post form.
	document.getElementById("chirp_form").addEventListener("submit", postValidation, false);

	// Event listeners for the character count feature of the post form.
	document.getElementById("post").addEventListener("change", characterCounter, false);
	document.getElementById("post").addEventListener("keydown", characterCounter, false);
	document.getElementById("post").addEventListener("keypress", characterCounter, false);
	document.getElementById("post").addEventListener("keyup", characterCounter, false);

	// Automatically call characterCounter to ensure count is up to date
	setTimeout(characterCounter, 1);
}




// Event listeners for index.php
else if (fileName() == "index.php" || fileName() == "") {

	// Event listener to swap between colour and black & white images for the like and dislike icons.
	// Get all images and add click event listeners to the like and dislike icons.
	var thumb_v = /^Thumb.+\.png$/;
	for (var i = 0; i < document.images.length; i++) {
		if (thumb_v.test(imageName(document.images[i].src))) {
			document.images[i].addEventListener("click", swapThumbImg, false);
		}
	}
}



	
// Event listeners for user.php
else if (fileName() == "user.php") {

	// Event listener to swap between colour and black & white images for the like and dislike icons.
	// Get all images and add click event listeners to the like and dislike icons.
	var thumb_v = /^Thumb.+\.png$/;
	for (var i = 0; i < document.images.length; i++) {
		if (thumb_v.test(imageName(document.images[i].src))) {
			document.images[i].addEventListener("click", swapThumbImg, false);
		}
	}
}




// Error
// Occurs when this script is added to web pages that contain no event listeners
else {
	alert("ERROR\n\nNo event listeners in " + fileName());
}