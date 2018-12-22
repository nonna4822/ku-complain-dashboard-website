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
    <title>จัดการหมวดหมู่</title>
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
  <center><h2 style="color: black"><p class ="sansserif">จัดการหมวดหมู่</h2></center><br><br>
  <table class="table table-dark table-hover table-bordered" >
    <thead>
      <tr>
        <th><center style="width:300px;">ชื่อหมวดหมู่</center></th>
        <th colspan="3" style="width:300px;"><center>Modify</center></th>
      </tr>
    </thead>
    <tbody>
      <?php
        require ('../managementsystem/category/querycate.php');
       ?>
    </tbody>
  </table>
</div>
</body>
</html>
