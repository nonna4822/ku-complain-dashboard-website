$(document).ready(function () {
    $.ajax({
        url: location.protocol + '//' + location.host + "/project2/analysis4.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var Total_Student = [];
            var Male = [];
            var Female = [];
            var subjecttitle  = [];

            for (var i in data) {
                Total_Student.push(data[i].Total_Student);
                Male.push(data[i].Male);
                Female.push(data[i].Female);
                subjecttitle .push(data[i].subjecttitle );
            }

            var chartdata = {
                labels: subjecttitle,
                datasets: [{
                    label: 'Number of Staff Register',
                    backgroundColor: 'rgba(30, 73, 119,0.3)',
                    borderColor: 'rgb(153, 204, 255)',
                    hoverBackgroundColor: 'rgb(0, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Total_Student
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

            var ctx = $("#mycanvas4");

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