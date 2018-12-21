$(document).ready(function(){
	$.ajax({
<<<<<<< HEAD
		url: location.protocol + '//' + location.host +	"/project2/analysis5.php",
=======
		url: location.protocol + '//' + location.host +	"analysis5.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
		method: "GET",
		success: function(data) {
			console.log(data);
			var branchname = [];
			var Total_Class = [];

			for(var i in data) {
				branchname.push(data[i].branchname);
				Total_Class.push(data[i].Total_Class);
			}

			var chartdata = {
				labels: branchname,
				datasets : [
					{
						label: 'Number of Section each branch',
						backgroundColor: 'rgba(30, 149, 119,0.3)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: Total_Class
					}
				]
			};

			var ctx = $("#mycanvas5");

			var barGraph = new Chart(ctx, {
	 type: 'radar',
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
