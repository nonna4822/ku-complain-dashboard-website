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

        <button type="button" class="btn btn-outline-primary"><p class ="sansserif"><a href = "../loginSystem/logout.php" >ออกจากระบบ</a></p></button></ul>

</nav><br><br><br>





<div class="container">
  <center><h2 style="color: black"><p class ="sansserif">จัดการผู้รับเรื่อง</h2></center><br><br>
  <table class="table table-dark table-hover table-bordered" >
    <thead>
      <tr>
        <th><center style="width:300px;">ชื่อ</center></th>
        <th><center style="width:300px;">นามสกุล</center></th>
        <th colspan="3" style="width:300px;"><center>จัดการผู้รับเรื่อง</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td><center><button type="button" class="btn btn-outline-success" style="width:100px; height:40px;">เพิ่มผู้รับเรื่อง</button></center></td>
        <td><center><button type="button" class="btn btn-outline-warning" style="width:100px; height:40px;">แก้ไข</button></center></td>
        <td><center><button type="button" class="btn btn-outline-danger" style="width:100px; height:40px;">ลบ</button></center></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td><center><button type="button" class="btn btn-outline-success" style="width:100px; height:40px;">เพิ่มผู้รับเรื่อง</button></center></td>
        <td><center><button type="button" class="btn btn-outline-warning" style="width:100px; height:40px;">แก้ไข</button></center></td>
        <td><center><button type="button" class="btn btn-outline-danger" style="width:100px; height:40px;">ลบ</button></center></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td><center><button type="button" class="btn btn-outline-success" style="width:100px; height:40px;">เพิ่มผู้รับเรื่อง</button></center></td>
        <td><center><button type="button" class="btn btn-outline-warning" style="width:100px; height:40px;">แก้ไข</button></center></td>
        <td><center><button type="button" class="btn btn-outline-danger" style="width:100px; height:40px;">ลบ</button></center></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
