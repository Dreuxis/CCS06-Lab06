<!DOCTYPE html>
<html>
    <head>
        <title>Profile Form</title>
        <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins");
        body {
            background-image: url("https://images.unsplash.com/photo-1519461343300-0d914c231ad4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");
        }
        .main {
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
        .namecont {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
        }
        .emailcont {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
        }
        .typecont {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
        }
        .satisfy {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
        }
        .messagecont {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
        }
        textarea {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;
            height: 300px;
            width: 600px;
        }
        input[type=text] {
            font-family: 'Poppins';
            font-size: 20px;
        }
        input[type=email] {
            font-family: 'Poppins';
            font-size: 20px;
        }
        input[type=range] {
        -webkit-appearance: none;
        margin-right: 15px;
        width: 250px;
        height: 30px;
        background:;
        border-radius: 5px;
        background-image: linear-gradient(to right, #FFACAC, #FFBFA9, #FFEBB4, #FBFFB1);
        background-repeat: no-repeat;
        }
        select {
            font-family: 'Poppins';
            font-size: 20px;
            text-align: left;   
        }
        .button {
            font-size: 20px;
            font-family: 'Poppins';
            border-radius: 25px;
        }

    </style>
    </head>
    
    <body>
        <div class="main" >
            <h1 class="Header">Feedback Form</h1>
            <form method="POST" action="thankyou.php">
                <div class="namecont">
                    Name: <input type="text" name="complete_name" size="30" required/>
                </div>
                <br />
                <div class="emailcont">
                    Email: <input type="email" name="email" size="30" required/>
                </div>
                <br />
                <div class="typecont">
                    Type of Concern:
                    <select name="type">
                        <option value="Inquiry">Inquiry</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <br />
                <div class="satisfy">
                    Satisfaction Level (From 1 to 10):<br><input type="range" name="satisfaction_level" value="1" min="1" max="10" step="1" oninput="this.nextElementSibling.value = this.value"/>
                    <output>1</output>
                </div>
                <div class="messagecont">
                    <label for="feedback"> Feedback Message:</label>
                    <br>
                    <textarea id="feedback" name="feedback" placeholder="Enter feedback here.."></textarea>
                    <br />
                </div>
                <button class="button" style="height:50px; width:100px">Submit</button>
            </form>
        </div>    
    </body>
</html>
