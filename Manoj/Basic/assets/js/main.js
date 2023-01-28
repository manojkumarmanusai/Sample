document.addEventListener("DOMContentLoaded", () => {
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth() + 1; //January is 0!
	var yyyy = today.getFullYear();

	if (dd < 10) {
	   dd = '0' + dd;
	}

	if (mm < 10) {
	   mm = '0' + mm;
	} 
	    
	today = yyyy + '-' + mm + '-' + dd;
	document.getElementById("activityDate").setAttribute("max", today);
	document.getElementById("activityDate").setAttribute("value", today);
	
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

