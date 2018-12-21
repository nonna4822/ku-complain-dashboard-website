<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Student Profile</title>
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

        h2 {
            font-size: 50px;
            color: navy;
        }


        .btn-primary {
            font-size: 30px;
            border-radius: 12px;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1.8rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(3.65rem + 1px);
            width: 100%;
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
                                <img src="../webpage/house.png" alt="" width="30px">
                                <strong> Home</strong>
                            </a>
                            <a href='logout.php' class="button1" style="width:250px">
                                <img src="../pictures/login (1).png" alt="" width="40px">
                                <strong> Log out</strong>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12" style="color:white; font-size:35px; text-align:right;">
                        <div class="form-group">
                            <a href='studentview.php' class="button1" style="width:250px">
                                <strong> Hi, Username</strong>
                            </a>
                            <a href='enrollment.php' class="button1" style="width:250px">
                                <strong> Enrollment</strong>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-image:linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">
        <h2>
            <strong>Edit Student Profile</strong>
        </h2>
        <div class="container-fluid" style="font-size:30px; text-align:center;">
            <div class="row">
                <form action="student.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="FirstName">FirstName</label>
                            <input type="text" class="form-control" id="FirstName" placeholder="FirstName" name="FirstName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="LastName">LastName</label>
                            <input type="text" class="form-control" id="LastName" placeholder="LastName" name="LastName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="CardNo">CardNo</label>
                            <input type="int" class="form-control" id="CardNo" placeholder="CardNo" name="CardNo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="DateofBirth<">DateofBirth</label>
                            <input type="Date" class="form-control" id="DateofBirth" placeholder="DateofBirth" name="DateofBirth">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Tel">Telephone-number</label>
                            <input type="int" class="form-control" id="Tel" placeholder="Telephone-number" name="Tel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Gender">Gender</label>
                            <select name="Gender" class="form-control">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address" placeholder="Address" name="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Province">Province</label>
                            <select name="Province" class="form-control">
                                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                <option value="กระบี่">กระบี่ </option>
                                <option value="กาญจนบุรี">กาญจนบุรี </option>
                                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                <option value="กำแพงเพชร">กำแพงเพชร </option>
                                <option value="ขอนแก่น">ขอนแก่น</option>
                                <option value="จันทบุรี">จันทบุรี</option>
                                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                <option value="ชัยนาท">ชัยนาท </option>
                                <option value="ชัยภูมิ">ชัยภูมิ </option>
                                <option value="ชุมพร">ชุมพร </option>
                                <option value="ชลบุรี">ชลบุรี </option>
                                <option value="เชียงใหม่">เชียงใหม่ </option>
                                <option value="เชียงราย">เชียงราย </option>
                                <option value="ตรัง">ตรัง </option>
                                <option value="ตราด">ตราด </option>
                                <option value="ตาก">ตาก </option>
                                <option value="นครนายก">นครนายก </option>
                                <option value="นครปฐม">นครปฐม </option>
                                <option value="นครพนม">นครพนม </option>
                                <option value="นครราชสีมา">นครราชสีมา </option>
                                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                <option value="นครสวรรค์">นครสวรรค์ </option>
                                <option value="นราธิวาส">นราธิวาส </option>
                                <option value="น่าน">น่าน </option>
                                <option value="นนทบุรี">นนทบุรี </option>
                                <option value="บึงกาฬ">บึงกาฬ</option>
                                <option value="บุรีรัมย์">บุรีรัมย์</option>
                                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                <option value="ปทุมธานี">ปทุมธานี </option>
                                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                <option value="ปัตตานี">ปัตตานี </option>
                                <option value="พะเยา">พะเยา </option>
                                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                <option value="พังงา">พังงา </option>
                                <option value="พิจิตร">พิจิตร </option>
                                <option value="พิษณุโลก">พิษณุโลก </option>
                                <option value="เพชรบุรี">เพชรบุรี </option>
                                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                <option value="แพร่">แพร่ </option>
                                <option value="พัทลุง">พัทลุง </option>
                                <option value="ภูเก็ต">ภูเก็ต </option>
                                <option value="มหาสารคาม">มหาสารคาม </option>
                                <option value="มุกดาหาร">มุกดาหาร </option>
                                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                <option value="ยโสธร">ยโสธร </option>
                                <option value="ยะลา">ยะลา </option>
                                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                <option value="ระนอง">ระนอง </option>
                                <option value="ระยอง">ระยอง </option>
                                <option value="ราชบุรี">ราชบุรี</option>
                                <option value="ลพบุรี">ลพบุรี </option>
                                <option value="ลำปาง">ลำปาง </option>
                                <option value="ลำพูน">ลำพูน </option>
                                <option value="เลย">เลย </option>
                                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                <option value="สกลนคร">สกลนคร</option>
                                <option value="สงขลา">สงขลา </option>
                                <option value="สมุทรสาคร">สมุทรสาคร </option>
                                <option value="สมุทรปราการ">สมุทรปราการ </option>
                                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                <option value="สระแก้ว">สระแก้ว </option>
                                <option value="สระบุรี">สระบุรี </option>
                                <option value="สิงห์บุรี">สิงห์บุรี </option>
                                <option value="สุโขทัย">สุโขทัย </option>
                                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                <option value="สุรินทร์">สุรินทร์ </option>
                                <option value="สตูล">สตูล </option>
                                <option value="หนองคาย">หนองคาย </option>
                                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                <option value="อุดรธานี">อุดรธานี </option>
                                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                <option value="อุทัยธานี">อุทัยธานี </option>
                                <option value="อุบลราชธานี">อุบลราชธานี</option>
                                <option value="อ่างทอง">อ่างทอง </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ZIPcode">ZIPcode</label>
                            <input type="int" class="form-control" id="Tel" placeholder="ZIPcode" name="ZIPcode">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Occupation">Occupation</label>
                            <input type="text" class="form-control" id="Occupation" placeholder="Occupation " name="Occupation">
                        </div>

                        <div style="width:100%">
                            <input type="submit" value="Update" style="border-radius: 15px; width: 100px; border: 1px solid black; font-size: 25px;background-color: white;">
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>

</body>