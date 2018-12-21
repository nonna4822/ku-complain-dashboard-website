$(document).ready(function(){
	$.ajax({
<<<<<<< HEAD
		url: location.protocol + '//' + location.host +	"/project2/analysis6.php",
=======
		url: location.protocol + '//' + location.host +	"analysis6.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
		method: "GET",
		success: function(data) {
			console.log(data);
			var shift = [];
			var Student = [];

			for(var i in data) {
				shift.push(data[i].shift);
				Student.push(data[i].Student);
			}

			var chartdata = {
				labels: shift,
				datasets : [
					{
						label: 'Number of Section each branch',
						backgroundColor: 'rgba(30, 149, 119,0.3)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: Student
					}
				]
			};

			var ctx = $("#mycanvas6");

			var barGraph = new Chart(ctx, {
	 type: 'bar',
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
