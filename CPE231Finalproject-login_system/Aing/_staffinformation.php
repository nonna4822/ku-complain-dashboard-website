<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staff Information</title>
    <script src="myscripts.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <style>
        * {
            font-family: 'Waffle Regular';

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

        .element {
            background-color: #119FA4;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 50px;
            text-align: left;
            margin: 0px 0px;
        }

        .element2 {
            background-color: rgba(17, 159, 164, 0.60);
            /* padding: 15px; */
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: center;
            margin: 0px 0px;

        }

        .picstyle {
            width: 50px;
            position: absolute;
            z-index: 999;
            bottom: -160px;
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

        .form-group {
            text-align: right;
        }

        .modal-body {
            color: black;
        }

        .btn-primary {
            font-size: 30px;
            border-radius: 12px;
        }

        .table-bordered {
            width: 100%;
        }
    </style>
</head>

<body>
<div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="menubar">
                    <div class="col-sm-4" style="color:white; font-size:35px; text-align:center;margin-left:850px; ">
                        <div class="form-group">
                            <a href='homepage.php' class="button1" style="width:30%">
                                <img src="../webpage/house.png" alt="" width="30%">
                                <strong> Home</strong>
                            </a>
                            <?php
      if(isset($_SESSION['firstname']) ){
        echo"
        <a href='logout.php' class=\"button1\" style=\"width:30%\">
        <img src=\"../pictures/login (1).png\" alt=\"\" width=\"30%\">
        <strong> Log out</strong>
    </a>";}
    else {echo"<a href='login.html' class=\"button1\" style=\"width:30%\">
        <img src=\"../pictures/login (1).png\" alt=\"\" width=\"30%\">
        <strong> Log in</strong>
    </a>";}
                            ?>
                                <a href="#" class="button1" style="width:30%">
                                    <img src="../pictures/folder.png" alt="" width="20%">
                                    <strong> ข้อมูลเชิงลึก</strong>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="element">
                <img src="../pictures/question.png" alt="" width="100px">
                <span style="padding-left:20px;">Who can you study with?</span>
            </div>
        </div>

        <div class="col">
            <div class="element2">
                <div class="row">
                    <div class="col-sm" style="color:white; font-size:35px; text-align:center; ">
                        <strong>Ms.Susi Rolipop</strong>
                        <div>
                            <img src="../pictures/girl.png" alt="" width="30%">
                        </div>
                    </div>

                    <div class="col-sm" style="color:white; font-size:35px; text-align:center; ">
                        <div>
                            <strong>Mr.Robert Alton</strong>
                        </div>
                        <div>
                            <img src="../pictures/boy.png" alt="" width="30%">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:40px;">
                    <div class="col-sm" style="color:white; font-size:35px; text-align:center; ">
                        <div>
                            <strong>Mrs.Charissa Pol</strong>
                        </div>
                        <div>
                            <img src="../pictures/girl (1).png" alt="" width="30%">
                        </div>
                    </div>
                    <div class="col-sm" style="color:white; font-size:35px; text-align:center; ">
                        <div>
                            <strong>Mr.Michel Pol</strong>
                        </div>
                        <div>
                            <img src="../pictures/man.png" alt="" width="30%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>