$(document).ready(function () {
    $.ajax({
        url: location.protocol + '//' + location.host + "/project2/analysis8.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var Teacher = [];
       
            var classno = [];
          

            for (var i in data) {
          
                Teacher.push(data[i].Teacher);
                classno.push(data[i].classno);
              
            }

            var chartdata = {
                labels:  classno,
                datasets: [{
                    label: 'Teacher',
                    backgroundColor: 'rgba(30, 73, 119,0.3)',
                    borderColor: 'rgb(153, 204, 255)',
                    hoverBackgroundColor: 'rgb(0, 153, 153)',
                    hoverBorderColor: 'rgba(195,132, 221, 1)',
                    data: Teacher
                }]
            };

            var ctx = $("#mycanvas8");

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