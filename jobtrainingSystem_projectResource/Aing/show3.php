<!DOCTYPE html>
<html>

<head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
        #chart-container {
            width: 840px;
            height: auto;
        }

        html {
            background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Waffle Regular';
            font-size: 30px;
            width: 100%;
        }

        .button1 {
            background-color: rgba(255, 255, 255, 0.3);
            background-position: center;
            border: none;
            padding: 0px 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 32px;
            font-family: 'Waffle Regular';
            border-radius: 12px;
            color: white;

        }

        .menubar {
            background-color: #225A69;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: right;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="menubar">
                <div class="col">
                    <div class="col-sm-5" style="color:white; font-size:35px; text-align:center;margin-left:800px;">
                        <div class="form-group">
                            <a href='homepage.php' class="button1" style="width:250px">
                                <img src="picture/house.png" alt="" width="30px">
                                <strong> Home</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <div class="col-md-12 spring-warmth-gradient">
            <div class="title-block" style="color:#1e4977;">
                <h2>Number of Staff Register each branch</h2>
            </div>
            <div id="chart-container">
                <canvas id="mycanvas3"></canvas>
            </div>
            <!-- javascript -->
            <script type="text/javascript" src="jquery.min.js"></script>
            <script type="text/javascript" src="Chart.min.js"></script>
            <script type="text/javascript" src="ana3.js"></script>
        </div>
</body>



</center>

</html>