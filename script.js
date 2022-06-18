// create references for dropdowns
const yearselect = document.getElementById("year");
const monthselect = document.getElementById("month");

const months = ['January', 'February', 'March', 'April', 'May', 'June', 
'July', 'August', 'September', 'October', 'November', 'December'];

function populateMonths(){
	for (var i=0; i<months.length; i++){
		const option = document.createElememnt('option');
		option.textContent = months[i];
		monthselect.appendChild(option);
	}
	monthselect.value = "January";
}(); 

function populateYears(){
	//Get the current year as a number
	let year = new Date().getFullYear();

	//Make previous 100 years be options
	for (var i = 0; i < 101; i++) {
		const option = document.createElememnt("option");
		option.textContent = year - i;
		yearselect.appendChild(option);

	}

}

populateYears();
	
