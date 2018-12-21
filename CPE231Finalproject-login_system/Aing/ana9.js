$(document).ready(function () {
    $.ajax({
        url: location.protocol + '//' + location.host + "/project2/analysis9.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var Total = [];
            var Success = [];
            var NOT_Success= [];
            var subjecttitle= [];

            for (var i in data) {
                Total.push(data[i].Total);
                Success.push(data[i].Success);
                NOT_Success.push(data[i].NOT_Success);
                subjecttitle.push(data[i].subjecttitle);
            }

            var chartdata = {
                labels: subjecttitle,
                datasets: [{
                    label: 'Number of Staff Register',
                    backgroundColor: 'rgba(30, 73, 119,0.3)',
                    borderColor: 'rgb(153, 204, 255)',
                    hoverBackgroundColor: 'rgb(0, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Total
                }, {
                    label: 'Male Staff',
                    backgroundColor: 'rgba(0, 77, 128,0.1)',
                    borderColor: 'rgba(153, 230, 255,1)',
                    hoverBackgroundColor: 'rgba(0, 57, 77,0.3)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Success
                }, {
                    label: 'Female Staff',
                    backgroundColor: 'rgba(255, 102, 102,0.3)',
                    borderColor: 'rgb(255, 204, 224)',
                    hoverBackgroundColor: 'rgb(255, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: NOT_Success
                }]
            };

            var ctx = $("#mycanvas9");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});