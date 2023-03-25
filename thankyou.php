<?php
    $complete_name = $_POST['complete_name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $feedback = $_POST['feedback'];
    if(isset($_POST['satisfaction_level'])){
        $satisfaction = $_POST['satisfaction_level'];

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thank You</title>
        <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins");
        body {
            background-image: url("https://images.unsplash.com/photo-1519461343300-0d914c231ad4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");
        }
        .main {
            font-family: 'Poppins';
            text-align: left;
            font-size: 20px;
            padding-top: 10px;
            padding-left: 60px;
            height: 720px;
            width: 720px;
            margin-left: 555px;
            margin-top: 80px;
            border-radius: 50px;
            box-shadow: 2px 2px 10px 10px #9E4784;
            background-color: #D27685;
        }
        .Header {
            font-family: 'Poppins';
            text-align: left;
        }
        textarea {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
            height: 300px;
            width: 600px;
        }
        </style>
    </head>
    <body>
        <div class="main" >
            <h1 class="Header">Thank You</h1>
            <?php
                echo "Received <b><font color=\"white\">$type</b></font> message from <font color=\"white\"><b>$complete_name ($email)</b></font>";
                echo "<br>";
            ?>
            <div class="message">
                <label for="message">Feedback Message:</label>
                <textarea id="message" readonly>
                    <?php
                    echo $feedback;
                    ?>
                </textarea>
            </div>
            <div class="satisfaction">
                <label><b>Satisfaciton Level:</b></label>
                <font color="white"><b><?php echo $satisfaction;?></b></font>
            </div>
    </body>
</html>
