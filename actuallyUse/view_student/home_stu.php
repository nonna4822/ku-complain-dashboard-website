<?php

//session
session_start();

if($_SESSION['name'] == ''){
  header("location : login.php");
  exit;
}

 ?>


<html lang="en">

    <style>
        h2#K1{color:darkcyan}
        h4#C1{color: aliceblue}




.topnav {
    background-color:darkslategray;
    overflow: hidden;
}


.topnav a {
    float: right;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
    font-size: 17px;
}


.topnav a:hover {
    background-color: #ddd;
    color: black;
        width: 13.5%;
    height: 13.5%;
}

.active1 {
    background-color: #4CAF50;
    color: white;
    width: 13.5%;
    height: 13.5%;
        }
.active {
    background-color: darkcyan;
    color: white;


}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}


@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;

  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.topnav .icon {
    display: none;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

.sidebar a.active {
  background-color:darkcyan;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="รูป/8.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script>
function showComplaint(str) {
    if (str == "") {
        document.getElementById("complaintTable").innerHTML = "";
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
        xmlhttp.open("GET","ajax_showOwnComplaint.php?stuid="+str,true);
        xmlhttp.send();
    }
}
</script>


</head>

<body>

<div class="sidebar">
    <img src="รูป/logo_KU-cb.jpg" width="200" height="200" >
  <a class="active" href="home.html">Home</a>
  <a href="?controller=complaint&action=newcomplaint">แจ้งเรื่องร้องเรียน</a>
    <a  href="check.html">เช็คสถานะเรื่องร้องเรียน</a>
  <a href="#about">About</a>
</div>

<div class="w3-top" style="padding-left: 14.7%; ">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" >
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
     <label for="country" style="padding-left: 10; padding-top: 7; font-size: 25px; color: #ddd;"><strong>KASETSART UNIVERSITY</strong></label>
     <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" style="height:53px;width:100px; font-size: 15; padding-top: 10%;"title="ออกจากระบบ" onclick="window.location.href='loginSystem/logout.php'">Logout</button>

  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white dropdown" title="My Account">

      <img src="รูป/4.jpg" class="w3-circle dropbtn" style="height:26px;width:25px" alt="Avatar"><label for="country" style="padding-left: 10; padding-top: 5; font-size: 10px; color: #ddd;"><strong><?php echo $_SESSION['name'] ?></strong></label>

  </a>
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="Notifications" style="height:53px;width:100px"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

  </div>
 </div>
</div><br><br><br><br>


<div class="container" style="padding-left: 15%">
  <div class="row">
    <h2>กระทู้ร้องเรียน</h2>
    <select name="category" onchange="showComplaint(this.value)">
      <option value="47">การทุจริตภายในมหาวิทยาลัย</option>
      <option value="2">การซ่อมบำรุง</option>
      <option value="3">ซักถามข้อสงสัยทั่วไป</option>
    </select>
  </div>

  <div id = "complaintTable" >
    <!-- <thead class="thead-dark">
      <tr >
        <th width="200" height="">หัวข้อเรื่อง</th>
        <th >เนื้อหา</th>
        <th width="200" >Option</th>
      </tr>
    </thead>
    <tbody >
    </tbody> -->
  </div>


</div>




<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
        var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>




</body>
</html>
