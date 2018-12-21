<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css"> -->
    <style>
        * {
            font-family: 'Waffle Regular';

        }

        html {
            background: url(bg-new.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Waffle Regular';
            width: 100%;
        }


        body,
        html {
            height: 100%;
        }

        h1 {
            font-family: 'Waffle Regular';
            font-size: 60px;
            color: #20D0C2;
            background-color: white;

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
            font-size: 40px;
            font-family: 'Waffle Regular';
            border-radius: 12px;
            color: navy;
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
                    <h1>
                        <strong>Sign in</strong>
                    </h1>
                    <form>
                        <div class="form-group" style=" font-size:25px;">
                            <label for="Your ID Card">Your ID Card</label>
                            <input type="int" class="form-control" style=" font-size:25px;" id="cardno" placeholder="Enter Your ID Card" name:
                                "cardno">
                        </div>
                        <div class="form-group" style=" font-size:25px;">
                            <label for="Your Tel. Number">Your Tel. Number</label>
                            <input type="password" class="form-control" style=" font-size:25px;" id="tel" placeholder="Enter Your Tel Number" name:
                                "Tel">
                        </div>
                        <div class="form-check form-check-inline" style=" font-size:25px; background-color:white ">
                            <input class="form-check-input" type="radio" name="student" value="option1">
                            <label class="form-check-label">Student</label>
                        </div>
                        <div class="form-check form-check-inline" style=" font-size:25px; background-color:white ">
                            <input class="form-check-input" type="radio" name="student" value="option1">
                            <label class="form-check-label">Staff</label>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary" style=" font-size:25px;">Login</button>
                        </div>
                    </form>

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