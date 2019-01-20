function getDurationInHoursMinutes(minutes) {
	
	var hours = Math.floor(minutes/60);
	var min = minutes % 60;

	if (min < 10) {
		min = "0"+min;
	}

	return hours + "h" + min + "mn"

}