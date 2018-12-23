<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course Offer</title>
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
            <span style="padding-left:20px;">What subject we have?</span>
        </div>
    </div>

    <div class="element2">
        <div class="container" style="text-align:center;">
            <h2>
                <strong>We have many subjects that offer for you!</strong>
            </h2>
            <!-- Button to Open the Modal -->
            <img src="../pictures/9_learning.png" alt="" width="30%">
            <div>
                <h2>"Click the button to view more subject information"</h2>
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
                                <strong>Subject Descriotion</strong>
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
                                            <strong>Subject Id</strong>
                                        </td>
                                        <td>
                                            <strong>Subject Title</strong>
                                        </td>
                                        <td>
                                            <strong>Subject Description</strong>
                                        </td>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>101</td>
                                            <td>ช่างยนต์</td>
                                            <td>ระบบหัวฉีด การตรวจเช็ค-แก้ไข</td>
                                        </tr>
                                        <tr>
                                            <td>102</td>
                                            <td>ของหวาน</td>
                                            <td>การเลือกวัตถุดิบ เทคนิคการตีแป้ง พื้นฐานการอบ</td>
                                        </tr>
                                        <tr>
                                            <td>103</td>
                                            <td>ช่างไฟ</td>
                                            <td>การเดินสายและวิธีต่างๆที่ถูกต้อง</td>
                                        </tr>
                                        <tr>
                                            <td>104</td>
                                            <td>ช่างแอร์</td>
                                            <td>โครงสร้างพื้นฐาน การทำความสะอาดเครื่องปรับอากาศ </td>
                                        </tr>
                                        <tr>
                                            <td>105</td>
                                            <td>ช่างเครื่องเสียง</td>
                                            <td>Sound Systems การปรับแต่งเสียง</td>
                                        </tr>
                                        <tr>
                                            <td>106</td>
                                            <td>นวดไทย</td>
                                            <td>ตำแหน่งการกดบนตัวมนุษย์ ท่านวดพื้นฐาน</td>
                                        </tr>
                                        <tr>
                                            <td>107</td>
                                            <td>ภาษาอังกฤษ</td>
                                            <td>การพูด-สนทนา พื้นฐาน</td>
                                        </tr>
                                        <tr>
                                            <td>108</td>
                                            <td>แต่งหน้า แต่งเล็บ</td>
                                            <td>พื้นฐานการเล่นสี การเลือกเครื่องสำอางให้เหมาะกับผิว</td>
                                        </tr>
                                        <tr>
                                            <td>109</td>
                                            <td>ช่างผมชาย</td>
                                            <td>พื้นฐานการตัดแต่งทรง</td>
                                        </tr>
                                        <tr>
                                            <td>110</td>
                                            <td>อาหารไทย</td>
                                            <td>พื้นฐานการเลือกวัตถุดิบ วิธีการทำ เทคนิคการปรุง</td>
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