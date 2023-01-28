document.addEventListener("DOMContentLoaded", () => {
	
	const messageEle = document.getElementById('activityDescription');
	const counterEle = document.getElementById('remainingC');
        // Get the `maxlength` attribute
	const maxLength = messageEle.getAttribute('maxlength');
	counterEle.innerHTML = "Characters remaining 0/" +`${maxLength}`
	messageEle.addEventListener('input', function (e) {
	    const target = e.target;    

	    // Count the current number of characters
	    const currentLength = target.value.length;

	    counterEle.innerHTML = "Characters remaining " +`${currentLength}/${maxLength}`;
});
});

