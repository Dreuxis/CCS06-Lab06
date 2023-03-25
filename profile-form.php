<?php

if (isset($_POST['complete_name'])):
    echo "<hr />";
    echo "<h1>Your Profile</h1>";
    echo "Full name: " . $_POST['complete_name'];
    echo "<hr />";
    // Debug
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
else:
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Profile Form</title>
        <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins");
        body {
            background-image: url("https://www.pixel4k.com/wp-content/uploads/2019/03/spiderman-miles-lost-in-space-4k_1553071367.jpg.webp");
            background-repeat: no-repeat;
            background-position: absolute;
            background-size: 140%;
        }
        .main {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
            padding-top: 10px;
            padding-left: 60px;
            height: 720px;
            width: 720px;
            margin-left: 285px;
            margin-top: 80px;
            border-radius: 50px;
            box-shadow: 2px 2px 10px 10px #d3e1ff;
            background-color: #ECF2FF;
        }
        .button {
            font-size: 20px;
            font-family: 'Poppins';
            border-radius: 25px;
        }
        select {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;   
        }
        input[type=text] {
            font-family: 'Poppins';
            font-size: 20px;
        }
        input[type=email] {
            font-family: 'Poppins';
            font-size: 20px;
        }
        input[type=date] {
            font-family: 'Poppins';
            font-size: 20px;
        }
    </style>
    </head>
    
    <body>
        <div class="main" >
            <h1>Enter Data</h1>
            <form method="POST" action="profile-form.php">
                <div class="name">
                    Name: <input type="text" name="complete_name" required/><br />
                </div>
                <br />
                <div class="birth">
                    Birthdate: <input type="date" name="birthdate" required/><br />
                </div>
                <br />
                <div class="email">
                    Email Address: <input type="email" name="email" required/><br />
                </div>
                <br />
                <div class="programs">
                    Program:
                    <select name="program">
                        <option value="BSCS">B.S. Computer Science</option>
                        <option value="BSIT">B.S. Information Technology</option>
                        <option value="BSIS">B.S. Information Systems</option>
                    </select>
                </div>
                <br />
                <div class="color">
                    Favorite Color: <input type="color" name="favorite_color" /><br />
                </div>
                <br />
                <div class="power">
                    <label for="superpower_level">Superpower Level:</label><br>
                    <input type="range" name="superpower_level" value="1" min="1" max="1000000" step="5000" oninput="this.nextElementSibling.value = this.value"/>
                    <output>1</output>
                </div>
                <br />
                <button class="button" style="height:50px; width:100px">Submit</button>
            </form>
        </div>
    </body>
</html>
<?php
endif;
?>