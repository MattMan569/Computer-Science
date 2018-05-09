// features.js
//
// This file contains all of the various
// JavaScript features such as post character
// count and like/dislike button animations.




// Dynamic character count of characters that the user
// has already typed into the post submition
// text box.
function characterCounter(event) {

	var count = document.getElementById("count");						// Dynamic counter
	var post = document.getElementById("post").value;					// Post content
	var characterCount = document.getElementById("character_count");	// Character counter div

	// Update counter
	count.innerHTML = post.length;

	// Check if length exceeds limits
	if (post.length > 250) {
		characterCount.style.color = "red";
	}
	else {
		characterCount.style.color = "black";
	}
}




// Swap between the color and black & white versions of the
// like and dislike buttons.
function swapThumbImg(event) {
	switch (imageName(event.currentTarget.src)) {
		case "ThumbsUpBW.png":
			event.currentTarget.src = event.currentTarget.src.substring(0, event.currentTarget.src.lastIndexOf("/") + 1) + "ThumbsUp.png";
			break;
		case "ThumbsUp.png":
			event.currentTarget.src = event.currentTarget.src.substring(0, event.currentTarget.src.lastIndexOf("/") + 1) + "ThumbsUpBW.png";
			break;
		case "ThumbsDownBW.png":
			event.currentTarget.src = event.currentTarget.src.substring(0, event.currentTarget.src.lastIndexOf("/") + 1) + "ThumbsDown.png";
			break;
		case "ThumbsDown.png":
			event.currentTarget.src = event.currentTarget.src.substring(0, event.currentTarget.src.lastIndexOf("/") + 1) + "ThumbsDownBW.png";
			break;
	}
}