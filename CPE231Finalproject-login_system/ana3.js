$(document).ready(function(){
	$.ajax({
<<<<<<< HEAD
		url: location.protocol + '//' + location.host +	"/project2/analysis3.php",
=======
		url: location.protocol + '//' + location.host +	"analysis3.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
		method: "GET",
		success: function(data) {
			console.log(data);
			var branchname = [];
			var CountStaff = [];

			for(var i in data) {
				branchname.push(data[i].branchname);
				CountStaff.push(data[i].CountStaff);
			}

			var chartdata = {
				labels: branchname,
				datasets : [
					{
						label: 'Number of Staff Register each branch',
						backgroundColor: 'rgba(30, 73, 119,0.3)',
						borderColor: 'rgba(255,205,0, 1)',
						hoverBackgroundColor: 'rgba(255,205,0, 1)',
                        hoverBorderColor: 'rgba(195,132, 221, 1)',
                        data: CountStaff
<<<<<<< HEAD
                        
=======

>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
					}
				]
			};

			var ctx = $("#mycanvas3");

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
