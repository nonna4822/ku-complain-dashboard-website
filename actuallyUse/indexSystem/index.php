<?php
  require 'getCateOption.php';
  ?>

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
    <title>ระบบจัดการเรื่องร้องเรียนสำหรับนิสิตภาควิชาวิศวกรรมคอมพิวเตอร์</title>
    <link rel="shortcut icon" href="../รูป/8.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script>
    function showComplaint(str) {
        document.getElementById("display").innerHTML = str;
        if (str == "") {
            document.getElementById("display").innerHTML = "no data in str";
            document.getElementById("complaintTable").innerHTML = "no data in str";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("complaintTable").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","ajax_showComplaint.php?q="+str,true);
            xmlhttp.send();
        }
    }
    </script>


</head>

<body ononline="showComplaint(การเรียน)">


<nav class="navbar navbar-expand-lg bg-dark navbar-dark ">

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

    <ul class="nav justify-content-end" style="padding-left:30em">
<form method="get" action="login.html">
        <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">เข้าสู่ระบบ</p></button>
        </form>
        <form method="get" action="login1.html">
        <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">ผู้ดูแลเข้าใช้ระบบ</p></button>
            </form>
        <form method="get" action="statics.html">
        <button type="submit" class="btn btn-outline-primary"><p class ="sansserif">สถิติ</p></button>
        </form>
    <div class="w3-dropdown-hover">

      <?php
        echo $selectObj;
        ?>

  </div>
        </ul>

</nav><br>


<div class="container"><br><br><br>

    <center><h2><p class ="sansserif">เรื่องร้องเรียน หมวดหมู่ :  <span id = "display" > this text for display</span></p></h2></center><br>
    <form action="/action_page.php">
   <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
        </div>
      <center>
      <div id="complaintTable" class="list-group" style="width:800px">

        </div></center>
    </form>
</div>

</body>
</html>
