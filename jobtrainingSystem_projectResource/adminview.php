<!-- session start-->
<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
  } else {
    header("location : login.html");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        table {
            width: 60%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {
          text-align: left;
          background-color: yellow;
        }

        button.green {
          background-color: #4CAF50;
           border: none;
           color: white;
           /* padding: 15px 32px; */
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           /* margin: 4px 2px; */
           cursor: pointer;
        }

        button.orange {
          background-color: orange;
           border: none;
           color: white;
           /* padding: 15px 32px; */
           text-align: center;
           text-decoration: none;
           display: inline-block;
           font-size: 16px;
           /* margin: 4px 2px; */
           cursor: pointer;
        }

      </style>
    </head>
    <body>
      <center>
        <h1>Admin View</h1>

        <button type="button" onclick="location.href='homepage.php'"> homepage </button>

        <button type="button" onclick="location.href='addsection.html'" >Add sections </button>

        <button type="button" onclick="location.href='addsection.html'" >delete subject </button>

        <button type="button" >Add branch </button>

        <button type="button" >Delete branch </button>

        <button type="button" class="orange">Enroll request </button>

        <button class="green" type="button" onclick="location.href='adminteachingform.php'">Register Teaching request </button>

        <div id="txtHint"><b>text</b></div>
      </center>



    <script type="text/javascript">

    document.getElementById("txtHint").innerHTML = "test";

    showsectionblank();

    function showsectionblank() {
           xmlhttp = new XMLHttpRequest();
           xmlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("txtHint").innerHTML = this.responseText;
               }
           };
           xmlhttp.open("GET","showsectionblank.php?",true);
           xmlhttp.send();
    }

    </script>

  </body>


</html>
