<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: white;
        }
        
        .wrapper {
            position: relative;
            height: 1000px;
            width: 400px;
            border: 2px solid white;
            z-index: 1;
            margin-left: 500px;
            top: 200px;
            border-radius: 20px;
        }
        
        .main {
            position: absolute;
            height: 1200px;
            width: 700px;
            margin-left: 350px;
            top: 40px;
            background-color: black;
        }
        
        h4 {
            text-align: center;
            margin-top: 10px;
            font-size: 20px;
            font-family: sans-serif;
            color: #FC8A17;
        }
        
        .input_data {
            margin-left: 30px;
            margin-top: 30px;
        }
        
        .nav {
            height: 150px;
            display: flex;
            justify-content: space-around;
        }
        
        .logo img {
            height: 100px;
            width: 150px;
            margin-top: 30px;
            position: absolute;
            padding-right: 30px;
        }
        
        .nav_label label {
            position: relative;
            font-weight: 500;
            font-size: 30px;
            font-family: 'Zen Tokyo Zoo', cursive;
            color: #FC8A17;
            right: 100px;
            top: 65px;
        }
        
        .input_data input {
            font-size: 17px;
            width: 300px;
            border: none;
            border-bottom: 2px solid gainsboro;
            font-weight: 700;
            color: white;
            background-color: black;
        }
        
        .input_data input:hover {
            width: 300px;
            border-bottom: 2px solid #FC8A17;
        }
        
        .input_data input:focus {
            outline: none;
            border: none;
            border-bottom: 2px solid #FC8A17;
        }
        
        .agree {
            text-align: center;
            margin-top: 10px;
        }
        
        .btn {
            text-align: center;
            margin-top: 40px;
        }
        
        .btn input {
            height: 30px;
            width: 200px;
            border: 1px solid #FC8A17;
            color: white;
            background-color: #FC8A17;
            border-radius: 30px;
        }
        
        .input_data label {
            font-size: 20px;
            font-weight: 600;
            color: #FC8A17;
        }
        
        .agree label {
            font-size: 20px;
            margin-bottom: 10px;
            margin-left: 10px;
            color: white;
        }
        
        .agree span {
            color: #FC8A17;
        }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        input[type="checkbox"] {
            appearance: none;
            -webkit-apperance: none;
            height: 19px;
            width: 20px;
            background-color: white;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            outline: none;
        }
        
        input[type="checkbox"]:after {
            font-family: "font Awesome 5 Free";
            font-weight: 900;
            content: "\f00c";
            font-size: 10px;
            color: white;
            display: none;
        }
        
        input[type="checkbox"]:checked {
            background-color: #FC8A17;
        }
        
        input[type="checkbox"]:checked:after {
            display: block;
        }
        
        #check {
            position: relative;
            top: 20px;
            margin-left: 40px;
        }
        
        .lastpara {
            margin-top: 1020px;
            text-align: center;
        }
        
        .lastpara a {
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        
        .lastpara span {
            color: #FC8A17;
        }
        
        .iconify {
            position: relative;
            top: 3px;
            font-size: 20px;
            font-weight: 700;
            color: #FC8A17;
        }
        
        .preload {
            background: black;
            background-size: 20%;
            height: 100%;
            width: 100%;
            position: fixed;
            z-index: 100;
            overflow-x: hidden;
        }
        
        .preload #load_content {
            font-size: 50px;
            color: #FC8A17;
            font-family: 'Zen Tokyo Zoo', cursive;
            word-spacing: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 400px;
        }
        
        .load {
            height: 100vh;
            width: 100vw;
            position: absolute;
        }
        
        .load>div {
            height: 80px;
            width: 80px;
            border: 5px solid white;
            border-top-color: orange;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 50%;
            animation: spin 0.2s infinite;
            animation-duration: 2s;
        }
        
        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
        
        @media screen and (max-width:1100px) {
            .main {
                margin-left: 190px;
            }
            .wrapper {
                margin-left: 330px;
            }
        }
        
        @media screen and (max-width:400px) {
            .main {
                margin-left: 100px;
            }
            .wrapper {
                margin-left: 250px;
            }
            .preload #load_content {
                display: none;
            }
            .load>div {
                left: 300px;
                top: 500px;
            }
        }
    </style>
</head>
<body>
     <!--Preload start-->

     <div class="preload">
        <div class="load">
            <div></div>
        </div>
        <div id="load_content"> Booking Club Sign Up
        </div>
    </div>

    <!--Preload end-->
 
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phno     =($_REQUEST['phno']);
        $password = ($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username,email,phno,password, create_datetime)
                     VALUES ('$username', '$email','$phno','$password', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
   
    <form action="" method="POST">
        <div class="main">
            <div class="nav">
                <div class="logo">
                    <img src="images/nav_logo-removebg-preview.png" alt="">
                </div>
                <div class="nav_label">
                    <label for="">Booking Club</label>
                </div>
            </div>
            <div class="lastpara">
                <a href="login.html">Already have an account? <span>Login</span></a>
            </div>
        </div>
        <div class="wrapper">
            <h4>SignUp</h4> <br>
            <div class="input_data">
                <span class="iconify" data-icon="ant-design:user-outlined"></span>

                <label for="">Username</label> <br> <br>
                <input type="text" name="username"> <br> <br> <br>
            </div>
            <div class="input_data">
                <span class="iconify" data-icon="clarity:email-line"></span>

                <label for="">Email</label> <br> <br>
                <input type="text" name="email"><br> <br> <br>
            </div>
            <div class="input_data">
                <span class="iconify" data-icon="bi:phone"></span>

                <label for="">Phonenumber</label> <br> <br>
                <input type="number" name="phno"><br> <br> <br>
            </div>
            <div class="input_data">
                <span class="iconify" data-icon="wpf:password1"></span>


                <label for="">Password</label><br><br>
                <input type="text" name="password"><br> <br> <br>
            </div>
            <div class="input_data">
                <span class="iconify" data-icon="wpf:password1"></span>


                <label for="">Confirm password</label><br> <br>
                <input type="text" name="conpasswd"><br> <br><br>
            </div>
            <div class="input_data">
                <span class="iconify" data-icon="ep:location"></span>


                <label for="">Loacation</label><br><br>
                <input type="text" name="location"><br> <br> <br>
            </div>
            <div class="agree">
                <input type="checkbox" name="" id="check">
                <label>I agree the <span>Terms & Conditions</span></label>
            </div>
            <div class="btn">
                <input type="submit" name="" value="SIGN UP">
            </div>
        </div>


    </form>
<?php
    }
?>
 <script>
        var load = document.querySelector(".preload");
        window.addEventListener("load", function() {
            setTimeout(() => load.style.display = "none", 2000);
        })
    </script>
</body>
</html>