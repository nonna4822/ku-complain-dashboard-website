

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
        xmlhttp.open("GET","../actuallyUse/Showplain.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>


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
    <!-- <div class="w3-dropdown-content w3-bar-block w3-border" onclick="showComplaint(str)">
      <a onclick="showComplaint(this.value)" href="#" class="w3-bar-item w3-button" value="1">หมวดการเรียน</a>
      <a onclick="showComplaint(this.value)" href="#" class="w3-bar-item w3-button" value="2">หมวดทั่วไป</a>
      <a onclick="showComplaint(this.value)" href="#" class="w3-bar-item w3-button">หมวดอื่นๆ</a>
    </div> -->
    <select onchange="showComplaint(this.value)" class="selectpicker">
      <option value="">เลือกหมวดหมู่</option>

    </select>

  </div>
        </ul>

</nav><br>


<div class="container"><br><br><br>

    <center><h2><p class ="sansserif">เรื่องร้องเรียน</p></h2></center><br>
    <form action="/action_page.php">
   <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
        </div>
    <h2><p class ="sansserif">หมวดหมู่ที่ 1 : this text <span id = "display">for display</span></h2><br>
      <center>
      <div class="list-group" style="width:800px">

          <table class="table table-bordered table-secondary table-hover">
              <thead class="thead-dark">
                  <tr>
                      <th><center><p class ="sansserif">กระทู้ร้องเรียน</center></th>
                      <th><center><p class ="sansserif">เนื้อหา</center></th>
                      <th><center><p class ="sansserif">วันที่</center></th>
                  </tr>
              </thead>

              <tbody>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 1</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องหาตึกภาคไม่เจอ</td><td><p class ="sansserif">1/12/2078</td>
                  </tr>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 2</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องการใช้คอมพิวเตอร์ไม่เป็น</td> <td><p class ="sansserif">1/12/2078</td>
                  </tr>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 3</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องเรียนเก่งเกินไป</td><td><p class ="sansserif">1/12/2078</td>
                  </tr>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 1</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องหาตึกภาคไม่เจอ</td><td><p class ="sansserif">1/12/2078</td>
                  </tr>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 2</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องการใช้คอมพิวเตอร์ไม่เป็น</td><td><p class ="sansserif">1/12/2078</td>
                  </tr>
                  <tr>
                      <td><p class ="sansserif">หัวข้อปัญหา 3</td>
                      <td><p class ="sansserif">มีปัญหาเรื่องเรียนเก่งเกินไป</td><td><p class ="sansserif">1/12/2078</td>
                  </tr>
              </tbody>
          </table>

          </div></center>
    </form>
</div>

</body>
</html>
