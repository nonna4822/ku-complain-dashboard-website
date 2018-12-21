<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Staff Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">

    <style>
        * {
            font-family: 'Waffle Regular';
        }

        .element {
            background-color: #119FA4;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 50px;
            text-align: left;
            margin: 20px 0px;
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

        .element2 {
            background-color: rgba(17, 159, 164, 0.36);
            /* padding: 15px; */
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: center;
            margin: 20px 0px;
            padding: 10px 500px;
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

        .form-control {
            font-size: 25px !important;
        }

        .picstyle {
            width: 50px;
            position: absolute;
            z-index: 999;
            bottom: -160px;
            padding:0px 0px;
        }

        .text {
            font-size: 30px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 204px;
            top: 275px;
        }

        .text1 {
            font-size: 25px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 10px;
            top: 320px;
        }

        .text2 {
            font-size: 25px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 200px;
            top: 340px;
        }

        .text3 {
            font-size: 25px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 95px;
            top: 360px;
        }

        .text4 {
            font-size: 25px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 220px;
            top: 380px;
        }

        .text5 {
            font-size: 25px;
            color: black;
            position: absolute;
            z-index: 999;
            right: 265px;
            top: 400px;
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

    <div class=picstyle>
        <img src="picture/OBDPS10.png" alt="" width=500px;>
    </div>
    <div class=text>
        <p align="right">
            <strong>*Qualifications of manager</strong>
        </p>
    </div>
    <div class=text1>
        <p>- More than 2-year experience in education and/or Management trainee </p>
    </div>
    <div class=text2>
        <p>- Strong communication in English and Thai</p>
    </div>
    <div class=text3>
        <p>- Organized,rational,initiative,team player and result oriented</p>
    </div>
    <div class=text4>
        <p>- Strong leadership, people management </p>
    </div>
    <div class=text5>
        <p>- Can be working under pressure </p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="element">
                <img src="picture/notepad.png" alt="" width="100px">
                <span style="padding-left: 30px;">Staff Register</span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="element2">
                <form action="staffinsert.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">FirstName</label>
                            <input type="text" class="form-control" id="firstname" placeholder="FirstName" name="firstname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">LastName</label>
                            <input type="text" class="form-control" id="lastname" placeholder="LastName" name="lastname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cardno">CardNo</label>
                            <input type="int" class="form-control" id="cardno" placeholder="CardNo" name="cardno">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="birthday<">Birthday</label>
                            <input type="Date" class="form-control" id="birthday" placeholder="DateofBirth" name="birthday">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">Telephone-number</label>
                            <input type="int" class="form-control" id="tel" placeholder="Telephone-number" name="tel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="province">Province</label>
                            <select name="province" class="form-control">
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
                            <label for="zipcode">ZIPcode</label>
                            <input type="int" class="form-control" id="zipcode" placeholder="ZIPcode" name="zipcode">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="graduate">Graduate</label>
                            <input type="text" class="form-control" id="graduate" placeholder="Graduate" name="graduate">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="branchid">BranchName</label>
                            <select name="branchid" class="form-control">
                                <option value="1">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ดินแดง 1)</option>
                                <option value="2">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ดินแดง 2)</option>
                                <option value="3">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (คลองเตย)</option>
                                <option value="4">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (บ่อนไก่)</option>
                                <option value="5">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (หนองจอก)</option>
                                <option value="6">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (บางรัก)</option>
                                <option value="7">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (หลวงพ่อทวีศักดิ์ฯ)</option>
                                <option value="8">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (กาญจนสิงห์หาสน์ฯ)</option>
                                <option value="9">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ม้วน บำรุงศิลป์)</option>
                                <option value="10">โรงเรียนฝึกอาชีพกรุงเทพมหานคร (อาทร สังขะวัฒนะ)</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="position">Position</label>
                            <select name="position" class="form-control">
                                <option value="Manager">Manager</option>
                                <option value="Teacher">Teacher</option>
                            </select>


                        </div>
                        <div class="form-check col-md-6" style="color:red ">
                            <input type="checkbox" class="form-check-input" id="Accept">
                            <label class="form-check-label" for="Accept">Accept</label>
                        </div>


                        <div style="width:100%">
                            <input type="submit" value="submit" style="border-radius: 15px; width: 100px; border: 1px solid black; font-size: 25px;background-color: white;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>
