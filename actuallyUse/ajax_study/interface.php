<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Use for study ajax</title>

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
  <body>
    <h1> Query drop down list First "getCateOption.php"</h1>

    <?php
      require 'getCateOption.php'; //now $selectObj keep 'output html element'
     ?>

    <h1> Use the above value continue query in "getCateOption.php"</h1>

    <p id="display">
      This text use for monitor value that will pass to the ajax
    </p>

    <div class="" id = "complaintTable">
      <!-- show table in the future -->
    </div>


  </body>
</html>
