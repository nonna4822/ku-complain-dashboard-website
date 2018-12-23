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
  margin: -10;
  padding-left: 3;
  width: 210px;
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
  background-color: darkcyan;
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
        

.navbar {
    background-color:darkslategray;
    overflow: hidden;
    position: fixed;
    bottom: 0;
    width: 100%;
}


.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}


.navbar a:hover {
    background-color: #ddd;
    color: black;
}


.navbar a.active {
    background-color: #4CAF50;
    color: white;
}
        
* {
    box-sizing: border-box;
}


.heading {
    font-size: 25px;
    margin-right: 10px;
}

.fa {
    font-size: 25px;
}

.checked {
    color: orange;
}

/* Three column layout */
.side {
    float: left;
    width: 15%;
    margin-top:10px;
}

.middle {
    margin-top:10px;
    float: left;
    width: 70%;
}

/* Place text to the right */
.right {
    text-align: left;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: left;
    color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .side, .middle {
        width: 100%;
    }
    .right {
        display: none;
    }
}

        
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
        
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Style the active class (and buttons on mouse-over) */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
        .container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}
    </style>
    
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    
<body> 

<div class="sidebar">
    <img src="Photo/logo_KU-cb.jpg" width="206.5" height="210" >
  <a class="active" href="home.php">Home</a>
  <a href="addpost.php">แจ้งเรื่องร้องเรียน</a>
  <a  href="check.php">เช็คสถานะเรื่องร้องเรียน</a>

  <a href="#about">About</a>
</div>

<div class="w3-top" style="padding-left: 14.7%; ">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" >
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
     <label for="country" style="padding-left: 10; padding-top: 7; font-size: 25px; color: #ddd;"><strong>KASETSART UNIVERSITY</strong></label>
     <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" style="height:53px;width:100px; font-size: 15; padding-top: 10%;">Logout</button>        

  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white dropdown" title="My Account">
      
      <img src="Photo/avatar/men/4.jpg" class="w3-circle dropbtn" style="height:26px;width:25px" alt="Avatar"><label for="country" style="padding-left: 10; padding-top: 5; font-size: 10px; color: #ddd;"><strong>b5920559999</strong></label>      

  </a>
  <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button w3-padding-large" title="Notifications" style="height:53px;width:100px"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>        

  </div>
 </div>
</div><br><br><br><br>

<div style="padding-left: 20%; padding-right: 20%;">
<div class="container" >
  <img src="Photo/avatar/men/4.jpg" class="w3-circle dropbtn" style="height:100px;width:100px" alt="Avatar">
  <p><span>b5920550589</span>เรื่องเน็ตไม่ดี<img src="Photo/avatar/kisspng-computer-icons-check-mark-royalty-free-true-or-false-5adb4ad8815827.9386544715243209845298.png" style="height:40px; width:40px;"></p>
    
  <p>มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้ มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้ มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้ มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้ มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้ มีปัญหาเชื่อมต่อเน็ตภาคไม่ได้</p>
</div>
</div>

<div style="padding-left: 30%; padding-right: 10%;">
<div class="container">
  <img src="Photo/avatar/high.jpg" alt="Avatar" style="height:100px;width:100px">
  <p><span>ผู้รับเรื่องร้องเรียน</span></p>
  <p>หกดสเใ่า้หกวด่าสอืฟหกวนดรอ่ฤฆฐฏญฮ(ศ)ฉฮ?์ฤซฯณฏโฌ็ฤ"ฎโฌฐณ็ษศฬ์(ซฆฏฌฯ็(ฯณฌ็(ฦฆฏโษศฌ็ฤฎฐฑฌณ็(ซฏโษศ์งรยนดอกืผกแอยน้ไบๆาือีแป</p><br>
    <div  style="padding-left: 78%;">
    <label for="country" style="padding-left: 10; padding-top: 7; font-size: 15px; color: black;"><strong>ให้คะแนนการตอบกลับ</strong></label>
    <fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
        </div>
</div>
    </div>
    
    <br><br><br>
        <ul class="nav justify-content-center" >
        <button type="button" class="btn btn-primary" >เสร็จสิ้น</button>
    </ul><br>
    </body>
</html>