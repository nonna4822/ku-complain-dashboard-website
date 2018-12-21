<?php

session_start();
if(isset($_SESSION['firstname'])){
  $firstname = $_SESSION['firstname'];
  $lastname = $_SESSION['lastname'];
  $cardno = $_SESSION['cardno'];
} else {
  header("location : login.html");
  exit;
}

//connect
include 'connect.php';

//query sql to find
$sql= "SELECT * FROM student WHERE cardno='$cardno'";

if (!mysqli_query($con,$sql)) {
    echo('Error: to find staff with cardno.' . mysqli_error($con));
}

//
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if($row['cardno'] == NULL){
  mysqli_close($con);
  echo "ไม่พบผู้ใช้ในระบบ";
}else {
  // echo $row['']
  $birthday=$row['birthday'];
  $gender=$row['gender'];
  $tel = $row['tel'];
  $address=$row['address'];
  $province=$row['province'];
  $zipcode=$row['zipcode'];
}

?>

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
                                    <img src="picture/house.png" alt="" width="30px">
                                    <strong> Home</strong>
                                </a>
                                <a href='logout.php' class="button1" style="width:250px">
                                    <img src="picture/login (1).png" alt="" width="40px">
                                    <strong> Log out</strong>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12" style="color:white; font-size:35px; text-align:right;">
                            <div class="form-group">
                                <a href='studentview.php' class="button1" style="width:250px">
                                    <strong>
                                        <?php echo $firstname." ".$lastname ?>
                                    </strong>
                                </a>
                                <a href='enrollment.php' class="button1" style="width:250px">
                                    <strong> ลงทะเบียนเรียน </strong>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image:linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);">
            <h2>
                <strong>Edit Staff Profile</strong>
            </h2>
            <div class="container-fluid" style="font-size:30px; text-align:center;">
                <div class="row">
                    <form action="updatestudent.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">FirstName</label>
                                <input type="text" class="form-control" id="firstname" placeholder="FirstName" name="firstname" value="<?php echo $firstname ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">LastName</label>
                                <input type="text" class="form-control" id="lastname" placeholder="LastName" name="lastname" value="<?php echo $lastname ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birthday<">Birthday</label>
                                <input type="Date" class="form-control" id="birthday" placeholder="Birthday" name="birthday" value="<?php echo $birthday ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel">Telephone-number</label>
                                <input type="int" class="form-control" id="tel" placeholder="Telephone-number" name="tel" value="<?php echo $tel; ?>">
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
                                <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php echo $address ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="province">Province</label>
                                <select name="province" class="form-control">
                                    <option value="Bangkok">Bangkok</option>
                                    <option value="Krabi">Krabi </option>
                                    <option value="Kanchanaburi">Kanchanaburi </option>
                                    <option value="Kalasin">Kalasin </option>
                                    <option value="Kamphaeng Phet">Kamphaeng Phet </option>
                                    <option value="Khon Kaen">Khon Kaen</option>
                                    <option value="Chanthaburi">Chanthaburi</option>
                                    <option value="Chachoengsao">Chachoengsao </option>
                                    <option value="Chainat">Chainat </option>
                                    <option value="Chaiyaphum">Chaiyaphum</option>
                                    <option value="Chumphon">Chumphon</option>
                                    <option value="Chonburi">Chonburi</option>
                                    <option value="Chiang Mai">Chiang Mai</option>
                                    <option value="Chiang Rai">Chiang Rai</option>
                                    <option value="Trang">Trang</option>
                                    <option value="Trad">Trad</option>
                                    <option value="Tak">Tak</option>
                                    <option value="Nakhon Nayok">Nakhon Nayok</option>
                                    <option value="Nakhon Pathom">Nakhon Pathom </option>
                                    <option value="Nakhon Phanom">Nakhon Phanom </option>
                                    <option value="Nakhon Ratchasima">Nakhon Ratchasima </option>
                                    <option value="Nakhon Si Thammarat">Nakhon Si Thammarat</option>
                                    <option value="Nakhon Sawan">Nakhon Sawan</option>
                                    <option value="Narathiwat">Narathiwat</option>
                                    <option value="Nan">Nan</option>
                                    <option value="Nonthaburi">Nonthaburi</option>
                                    <option value="Bueng Kan">Bueng Kan</option>
                                    <option value="Buriram">Buriram</option>
                                    <option value="Prachuap Khiri Khan">Prachuap Khiri Khan</option>
                                    <option value="Pathum Thani">Pathum Thani </option>
                                    <option value="Prachinburi">Prachinburi </option>
                                    <option value="Pattani">Pattani </option>
                                    <option value="Phayao">Phayao</option>
                                    <option value="Phra Nakhon Si Ayutthaya">Phra Nakhon Si Ayutthaya </option>
                                    <option value="Phang Nga">Phang Nga </option>
                                    <option value="Pichit">Pichit</option>
                                    <option value="Phitsanulok">Phitsanulok </option>
                                    <option value="Phetchaburi">Phetchaburi </option>
                                    <option value="Phetchabun">Phetchabun </option>
                                    <option value="Phrae">Phrae</option>
                                    <option value="Phatthalung">Phatthalung</option>
                                    <option value="Phuket">Phuket</option>
                                    <option value="Maha Sarakham">Maha Sarakham</option>
                                    <option value="Mukdahan">Mukdahan</option>
                                    <option value="Mae Hong Son">Mae Hong Son </option>
                                    <option value="Yasothon">Yasothon</option>
                                    <option value="Yala">Yala </option>
                                    <option value="Roi Et">Roi Et</option>
                                    <option value="Ranong">Ranong </option>
                                    <option value="Rayong">Rayong</option>
                                    <option value="Ratchaburi">Ratchaburi</option>
                                    <option value="Lopburi">Lopburi </option>
                                    <option value="Lampang">Lampang </option>
                                    <option value="Lamphun">Lamphun</option>
                                    <option value="Loei">Loei </option>
                                    <option value="Sisaket">Sisaket</option>
                                    <option value="Sakon Nakhon">Sakon Nakhon</option>
                                    <option value="Songkhla">Songkhla</option>
                                    <option value="Samut Sakhon">Samut Sakhon </option>
                                    <option value="Samut Prakan">Samut Prakan </option>
                                    <option value="Samut Songkhram">Samut Songkhram </option>
                                    <option value="Sa Kaeo">Sa Kaeo</option>
                                    <option value="Saraburi">Saraburi </option>
                                    <option value="Sing Buri">Sing Buri</option>
                                    <option value="Sukhothai">Sukhothai </option>
                                    <option value="Suphan Buri">Suphan Buri</option>
                                    <option value="Surat Thani">Surat Thani</option>
                                    <option value="Surin">Surin </option>
                                    <option value="Satun">Satun</option>
                                    <option value="Nong Khai">Nong Khai </option>
                                    <option value="Nong Bua Lamphu">Nong Bua Lamphu </option>
                                    <option value="Amnat Charoen">Amnat Charoen </option>
                                    <option value="Udon Thani">Udon Thani </option>
                                    <option value="Uttaradit">Uttaradit </option>
                                    <option value="Uthai Thani">Uthai Thani </option>
                                    <option value="Ubon Ratchathani">Ubon Ratchathani</option>
                                    <option value="Ang Thong">Ang Thong</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="zipcode">ZIPcode</label>
                                <input type="int" class="form-control" id="zipcode" placeholder="ZIPcode" name="zipcode" value="<?php echo $zipcode ?>">
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
