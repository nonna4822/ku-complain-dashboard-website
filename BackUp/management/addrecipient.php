<html lang="en">
    <style>
        body{background-image: url(../รูป/03-897.jpg)}
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}
        p.sansserif {
    font-family: 'Kanit', sans-serif;
    }
    </style>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <title>เพิ่มผู้รับเรื่อง</title>
    <link rel="shortcut icon" href="../รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <ul class="nav">
        <li class="nav-item">
            <img src="../รูป/8.png" width="100" height="85">

        </li>
    </ul>

    <ul class="nav justify-content-end" style="padding-left:1em">
        <li class="nav-item ">
            <h2 id="K1"><p class ="sansserif">ระบบจัดการเรื่องร้องเรียนสำหรับนิสิต</h2>
            <h4 id="C1"><p class ="sansserif">ภาควิชาวิศวกรรมคอมพิวเตอร์</h4>
        </li>
    </ul>


</nav><br>
    <div class="container">
  <center><h2><p class ="sansserif">เพิ่มผู้รับเรื่อง</h2></center>
  <form method='get' action = '../managementsystem/Add_recipient.php'>
      <div class="form-group">
      <label for="pwd">Username:</label>
      <input type="username" class="form-control" name="rid" id="pwd" placeholder="Enter username" value="">
    </div>

      <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="rpassword" id="pwd" placeholder="Enter password">
    </div>
      <div class="form-group">
      <label for="pwd">ชื่อ:</label>
      <input type="username" class="form-control" name="rname" id="pwd" placeholder="Enter name">
    </div>
      <div class="form-group">
      <label for="pwd">นามสกุล:</label>
      <input type="username" class="form-control" name="rLname" id="pwd" placeholder="Enter lastname">
    </div>
      <div>
          <label>หมวดหมู่:</label></div>
      <?php

        require ('../managementsystem/category/querycategorydropdrown.php');
     ?>
    </div>
    <center><button type="button" class="btn btn-success"><p class ="sansserif">กลับหน้าหลัก</button>
      <button type="submit" class="btn btn-success" data-toggle="collapse" data-target="#demo"><p class ="sansserif">เพิ่มผู้รับเรื่อง</button></center>
      <div id="demo" class="collapse">
  </div>
  </form>
</div>
