$(document).ready(function(){
	$.ajax({
		url: location.protocol + '//' + location.host +	"/project2/analysis1.php",
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
});