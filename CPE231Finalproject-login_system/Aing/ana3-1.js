$(document).ready(function () {
    $.ajax({
        url: location.protocol + '//' + location.host + "/project2/analysis3-1.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var CountStaff = [];
            var Male = [];
            var Female = [];
            var branchname = [];

            for (var i in data) {
                CountStaff.push(data[i].CountStaff);
                Male.push(data[i].Male);
                Female.push(data[i].Female);
                branchname.push(data[i].branchname);
            }

            var chartdata = {
                labels: branchname,
                datasets: [{
                    label: 'Number of Staff Register',
                    backgroundColor: 'rgba(30, 73, 119,0.3)',
                    borderColor: 'rgb(153, 204, 255)',
                    hoverBackgroundColor: 'rgb(0, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: CountStaff
                }, {
                    label: 'Male Staff',
                    backgroundColor: 'rgba(0, 77, 128,0.1)',
                    borderColor: 'rgba(153, 230, 255,1)',
                    hoverBackgroundColor: 'rgba(0, 57, 77,0.3)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Male
                }, {
                    label: 'Female Staff',
                    backgroundColor: 'rgba(255, 102, 102,0.3)',
                    borderColor: 'rgb(255, 204, 224)',
                    hoverBackgroundColor: 'rgb(255, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Female
                }]
            };

            var ctx = $("#mycanvas3-1");

            var barGraph = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartdata
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});