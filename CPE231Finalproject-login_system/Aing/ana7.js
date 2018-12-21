$(document).ready(function(){
	$.ajax({
		url: location.protocol + '//' + location.host +	"/project2/analysis7.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var staff = [];
			var branchname = [];

			for(var i in data) {
				staff.push(data[i].staff);staff
				branchname.push(data[i].branchname);
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
						data: staff
					}
				]
			};

			var ctx = $("#mycanvas7");

			var barGraph = new Chart(ctx, {
	 type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});