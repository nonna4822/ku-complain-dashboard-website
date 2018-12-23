$(document).ready(function(){
	$.ajax({
<<<<<<< HEAD
		url: location.protocol + '//' + location.host +	"/project2/analysis2.php",
=======
		url: location.protocol + '//' + location.host +	"/analysis2.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
		method: "GET",
		success: function(data) {
			console.log(data);
			var Teacher = [];
			var subjectTitle = [];

			for(var i in data) {
				Teacher.push(data[i].Teacher);
				subjectTitle.push(data[i].subjectTitle);
			}

			var chartdata = {
				labels: subjectTitle,
				datasets : [
					{
						label: 'Number of Teacher each Subject',
						backgroundColor: 'rgba(195,132, 221, 1)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: Teacher
					}
				]
			};

			var ctx = $("#mycanvas1");

			var barGraph = new Chart(ctx, {
	 type: 'horizontalBar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
<<<<<<< HEAD
});
=======
});
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
