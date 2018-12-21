$(document).ready(function(){
	$.ajax({
<<<<<<< HEAD
		url: location.protocol + '//' + location.host +	"/project2/analysis1.php",
=======
		url: location.protocol + '//' + location.host +	"/analysis1.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
		method: "GET",
		success: function(data) {
			console.log(data);
			var branchname = [];
			var NumofSection = [];

			for(var i in data) {
				branchname.push(data[i].branchname);
				NumofSection.push(data[i].NumofSection);
			}

			var chartdata = {
				labels: branchname,
				datasets : [
					{
						label: 'Number of Section each branch',
						backgroundColor: 'rgba(30, 149, 119,0.3)',
						borderColor: 'rgba(102, 255, 255,1)',
						hoverBackgroundColor: 'rgba(102, 255, 255,1)',
						hoverBorderColor: 'rgba(195,132, 221, 1)',
						data: NumofSection
					}
				]
			};

			var ctx = $("#mycanvas");

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
