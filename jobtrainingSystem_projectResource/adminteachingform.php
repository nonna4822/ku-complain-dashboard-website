<?php
  session_start();
  if(isset($_SESSION['firstname'])){
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $cardno = $_SESSION['cardno'];
  } else {
    header("location : login.html");
    exit;
  }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Teaching Form</title>
        <script src="myscripts.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


        <style>
            * {
                font-family: 'Waffle Regular';


            }

            table,
            td,
            th {
                border: 1px solid black;
                padding: 5px;
            }


            .menubar {
                background-color: #225A69;
                /* padding: 15px; */
                opacity: 0.85;
                width: 100%;
                color: white;
                font-size: 30px;
                text-align: right;

            }

            th {
              background-color: "yellow";
            }

            .element {
                background-color: #119FA4;
                /* padding: 15px; */
                opacity: 0.85;
                width: 100%;
                color: white;
                font-size: 50px;
                text-align: left;
                margin: 0px 0px;
            }

            .element2 {
                background-color: rgba(17, 159, 164, 0.60);
                /* padding: 15px; */
                width: 100%;
                color: white;
                font-size: 30px;
                text-align: center;
                margin: 0px 0px;

            }

            .picstyle {
                width: 50px;
                position: absolute;
                z-index: 999;
                bottom: -160px;
            }

            .button1 {
                background-color: rgba(255, 255, 255, 0.3);
                background-position: center;
                border: none;
                padding: 0px 0px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 32px;
                font-family: 'Waffle Regular';
                border-radius: 12px;
                color: white;

            }

            h2 {
                font-size: 50px;
                color: navy;
            }


            .btn-primary {
                font-size: 30px;
                border-radius: 12px;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1.8rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            select.form-control:not([size]):not([multiple]) {
                height: calc(3.65rem + 1px);
                width: 100%;
            }
        </style>
    </head>

    <body>

            <form>


                <div class="form-group col-md-6">
                    <label for="Branchid">Branch Name</label>
                    <select name="branchid" class="form-control" onchange="param1(this.value)">
                        <option value="">null </option>
                        <option value="1">Bangkok Training School (Din Daeng 1)</option>
                        <option value="2">Bangkok Training School (Din Daeng 2)</option>
                        <option value="3">Bangkok Training School (Khlong Toei)</option>
                        <option value="4">Bangkok Training School (Bon Kai)</option>
                        <option value="5">Bangkok Training School (Nong Jok)</option>
                        <option value="6">Bangkok Training School (Bang Rak)</option>
                        <option value="7">Bangkok Training School (Luang Por Taweesak)</option>
                        <option value="8">Bangkok Training School (Kanchana Singh)</option>
                        <option value="9">Bangkok Training School (Mouan Bumrungsin)</option>
                        <option value="10">Bangkok Training School (Arthon)</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="subjectid">Subject Title</label>
                    <select name="subjectid" class="form-control" onchange="param2(this.value)">
                        <option value="">null </option>
                        <option value="1">Automotive</option>
                                <option value="2">Dessert Making Skills</option>
                                <option value="3">Electrician</option>
                                <option value="4">Air Conditioning Technician</option>
                                <option value="5">Sound Engineer</option>
                                <option value="6">Thai massage</option>
                                <option value="7">English Skill</option>
                                <option value="8">Makeup Skill</option>
                                <option value="9">Hair dresser</option>
                                <option value="10">Cooking skill</option>
                    </select>
                </div>

                <button type="button" name="button" onclick="showteaching()"> Search </button>

            </form>

            <br>

            <div id="txtHint">
                <b>Person info will be listed here...</b>
            </div>

            <div id="sectionid">
                <b>Person info will be listed here...</b>
            </div>

            <script>
                var branchid = "";
                var subjectid = "";

                function param1(str) {
                    branchid = str;
                }

                function param2(str) {
                    subjectid = str;
                }

                function showteaching() {
                    if (branchid == "" || subjectid == "") {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "adminteachingajax.php?p1=" + branchid + "&p2=" + subjectid + "\"", true);
                        xmlhttp.send();
                    }
                }

                function confirm(teachingid) {
                    xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sectionid").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "adminconfirmstaff.php?teachingid=" + teachingid, true);
                    xmlhttp.send();
                }
            </script>



        </body>

    </html>
