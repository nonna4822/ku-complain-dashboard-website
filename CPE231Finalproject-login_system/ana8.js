$(document).ready(function () {
    $.ajax({
<<<<<<< HEAD
        url: location.protocol + '//' + location.host + "/project2/analysis8.php",
=======
        url: location.protocol + '//' + location.host + "analysis8.php",
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
        method: "GET",
        success: function (data) {
            console.log(data);
            var Teacher = [];
<<<<<<< HEAD
       
            var classno = [];
          

            for (var i in data) {
          
                Teacher.push(data[i].Teacher);
                classno.push(data[i].classno);
              
=======

            var classno = [];


            for (var i in data) {

                Teacher.push(data[i].Teacher);
                classno.push(data[i].classno);

>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
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
<<<<<<< HEAD
});
=======
});
>>>>>>> 2af8fa455308db430bda34974d7f05e7dcf444df
