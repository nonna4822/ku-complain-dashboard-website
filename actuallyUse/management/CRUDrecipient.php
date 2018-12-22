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
    <title>จัดการผู้รับเรื่อง</title>
    <link rel="shortcut icon" href="../รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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

    <ul class="nav justify-content-end" style="padding-left:47em">
      <form action="../loginSystem/logout.php">
       <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">ออกจากระบบ</p></button></ul>
     </form>
</nav><br><br><br>
<div class="container">
<center><h2 style="color: black"><p class ="sansserif">จัดการผู้รับเรื่อง</h2></center><br><br>
  <form action = '../management/addrecipient.php'>
  <center><button type='sumit' class='btn btn-success' style='width:130px; height:40px;'>เพิ่มผู้รับเรื่อง</button></center>
</form>
  <table class="table table-dark table-hover table-bordered" >
    <thead>
      <tr>
        <th><center style="width:150px;">username</center></th>
        <th><center style="width:150px;">ชื่อ</center></th>
        <th><center style="width:150px;">นามสกุล</center></th>
        <th><center style="width:150px;">ชื่อหมวดหมู่</center></th>
        <th colspan="3" style="width:300px;"><center>จัดการผู้รับเรื่อง</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
        require ('../managementsystem/category/queryreciever.php');
       ?>
    </tbody>
  </table>
</div>
</body>
</html>
