$( function() {
	$("#skeduler-container").skeduler({
		headers: headers,
		day0: day0, day1: day1, day2: day2,	day3: day3,	day4: day4,	day5: day5,	day6: day6,	
		emp0: emp0, emp1: emp1, emp2: emp2,	emp3: emp3,	emp4: emp4,	emp5: emp5,	emp5: emp6,
		month_ar: month_ar,
		cardTemplate: cardTemplateDefault,
		emptyCardTemplate: '<div></div>'
	});
});