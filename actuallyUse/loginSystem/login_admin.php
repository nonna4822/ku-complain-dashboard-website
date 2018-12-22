<html lang="en">
    <style>
        body{background-image: url(รูป/03-897.jpg)}
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}
        p.sansserif {
    font-family: 'Kanit', sans-serif;
    }
    </style>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>เข้าสู่ระบบ</title>
    <link rel="shortcut icon" href="รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


        <!-- Favicon and touch icons -->
</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <ul class="nav">
        <li class="nav-item">
            <img src="รูป/8.png" width="100" height="85">

        </li>
    </ul>

    <ul class="nav justify-content-end" style="padding-left:1em">
        <li class="nav-item ">
            <h2 id="K1"><p class ="sansserif">ระบบจัดการเรื่องร้องเรียนสำหรับนิสิต</h2>
            <h4 id="C1"><p class ="sansserif">ภาควิชาวิศวกรรมคอมพิวเตอร์</h4>
        </li>
    </ul>
    </nav><br><br>
    <center><h2><p class ="sansserif">เข้าสู่ระบบ</p></h2></center><br>

                    <div class="w3-container">

    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent " ></span>

      </div>

        <form class="w3-container" action="getloginad.php" method="get"><p class ="sansserif"><big><strong>กรอกรหัสเพื่อเข้าใช้งาน</strong></big>
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <form method="get" action="index.php">
              <button onclick="document.getElementById('id01').style.display='none'" type="submit" class="w3-button w3-red"><p class ="sansserif">กลับสู่หน้าหลัก</button></form>
      </div>

    </div>
  </div>

</body>
</html>
