<!DOCTYPE html>
<html lang="en">

<head>
    <title>Branch Information</title>
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
            margin: 0px 20px;
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
                                <img src="../picture/house.png" alt="" width="30%">
                                <strong> Home</strong>
                            </a>
                            <?php
      if(isset($_SESSION['firstname']) ){
        echo"
        <a href='logout.php' class=\"button1\" style=\"width:30%\">
        <img src=\"picture/login (1).png\" alt=\"\" width=\"30%\">
        <strong> Log out</strong>
    </a>";}
    else {echo"<a href='login.html' class=\"button1\" style=\"width:30%\">
        <img src=\"picture/login (1).png\" alt=\"\" width=\"30%\">
        <strong> Log in</strong>
    </a>";}
                            ?>
                                <a href="#" class="button1" style="width:30%">
                                    <img src="picture/folder.png" alt="" width="20%">
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
            <img src="picture/question.png" alt="" width="100px">
            <span style="padding-left:20px;">Where can you study?</span>
        </div>
    </div>

    <div class="element2">
        <div class="container" style="text-align:center;">
            <h2>
                <strong>We have many branches that offer for you!</strong>
            </h2>
            <!-- Button to Open the Modal -->
            <img src="picture/17755-NRF9UM.png" alt="" width="30%">
            <div>
                <h2>"Click the button to view more information"</h2>
            </div>
            <div>
                <button type="button" class="btn-primary" data-toggle="modal" data-target="#myModal">
                    Open
                </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title" style="color:navy;font-size:30px;">
                                <strong>Branch Information</strong>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" style="font-size:25px;">
                            <table id="classTable" class="table-bordered" style="width:100%;">
                                <thead>
                                </thead>
                                <thead>
                                    <tr>
                                        <td>
                                            <strong>Name</strong>
                                        </td>

                                        <td>
                                            <strong>Tel.</strong>
                                        </td>

                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร ดินแดง 1 </td>
                                            <td>081-852-3344</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร ดินแดง 2 </td>
                                            <td>081-852-3345</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร คลองเตย </td>
                                            <td>081-852-3000</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร บ่อนไก่ </td>
                                            <td>081-852-3100</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร หนองจอก </td>
                                            <td>081-852-3200</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร บางรัก </td>
                                            <td>081-852-3300</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร หลวงพ่อทวีศักดิ์ฯ</td>
                                            <td>081-852-3400</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร กาญจนสิงห์หาสน์ฯ</td>
                                            <td>081-852-3500</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร ม้วน บำรุงศิลป์</td>
                                            <td>081-852-3600</td>
                                        </tr>
                                        <tr>
                                            <td>โรงเรียนฝึกอาชีพกรุงเทพมหานคร อาทร สังขะวัฒนะ</td>
                                            <td>081-852-3700</td>
                                        </tr>
                                        <tr>
                                            <td>กลุ่มงานการศึกษาอาชีพ กองส่งเสริมอาชีพ</td>
                                            <td>081-852-4000</td>
                                        </tr>

                                    </tbody>
                                </thead>
                            </table>
                        </div>


                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" style="font-size:20px;" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
