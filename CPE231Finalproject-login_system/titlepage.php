<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css"> -->
    <script src="myscripts.js"></script>
    <style>
        html {
            background: url(picture/people-woman-coffee-meeting.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Waffle Regular';
        }
        body,html{
            height:100%;
        }

        h1{
            font-family: 'Waffle Regular';
            font-size: 100px;
            color: navy;
            background-color: rgba(255, 255, 255, 0.6)
        }
        body {
            /* height: 100%; */
            background-color: transparent;
        }

        .button {
            background-color: white;
            background-position: center;
            opacity: 0.7;
            border: none;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 50px;
            font-family: 'Waffle Regular';
            border-radius: 12px;
            color: navy;
        }

        .dropbtn {
            background-color: white;
            background-position: center;
            opacity: 0.7;
            border: none;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 50px;
            font-family: 'Waffle Regular';
            border-radius: 12px;
            height: 100%;
            color: navy;
            cursor: pointer;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: lightskyblue;
        }

        .dropdown {

            display: inline-block;
            height: 100%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            font-family: 'Waffle Regular';
            font-size: 35px;
            color: navy;
        }

        .dropdown-content a {
            color: n;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Waffle Regular';
            font-size: 35px;
        }

        .dropdown a:hover {
            background-color: lightskyblue
        }

        .show {
            display: block;
        }

    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-sm" style="text-align: center">
                    <div class="form-group">
                            <h1>Training Center Vocational </h1>

                        </div>
                        <div class="form-group">
                                <a href="homepage.php" class="button">Home</a>
                                <a href="login.html" class="button">Login</a>

                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">Sign Up</button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="studentsignup.php">Student</a>
                                        <a href="staffregister.php">Apply for job</a>
                                    </div>
                                </div>
                            </div>
            </div>

        </div>
    </div>


    <script>
        /* When the user clicks on the button,
                                    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
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
