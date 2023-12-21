<!DOCTYPE html>
<html>
    <head>
    <title>Log In Page</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
    body{
        background-color: #cda45e;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: "Times New Roman", serif;
    }

    a{
        text-decoration: none;
        color:#cda45e
    }

    a:hover{
        cursor: pointer;
        color: beige;
    }

    .gold-frame {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 
      height: 500px;
      width: 600px;
      background-color: black;
      position: relative;
      text-align: center;

    }

    .log-in{
        margin-top: 20px;
        font-family: "Times New Roman", serif;
        color: #cda45e;
        font-size: 38px;
    }

    .inp2{
        margin-top: 90px;
    }

    .custom-input {
        width: 250px;
        height: 20px;
        background-color: #cda45e;
        padding: 5px;
        font-size: 14px;
    }

    .login{
        width: 170px;
        height: 37px;
        font-size: 21px;
        border-radius: 1px;
        position: absolute;
        font-family: "Times New Roman", serif;
        background-color: #cda45e;
        cursor: pointer;
        color: black;
        font-weight: bold;
    }

    label{
        color: #cda45e;
        font-size: 20px;
    }

    .forgot-pass{
        font-size: 13px;
        margin-left: 165px;
        margin-top: -15px;
    }

    .login-div{
        margin-right: 175px;
        margin-top: 50px;
    }

    .circle {
    position: absolute;
    top: 0;
    right: 0;
    width: 130px;
    height: 100px;
    background-color: black;
    border-radius: 0 0 0 100%;
    text-align: center;
    color: #cda45e;
    font-weight: bold;
    cursor: pointer;
    padding-top: 47px;
    font-size: 24px;
    padding-left: 34px;
    transition: all 1s ease-in-out;
    z-index: 10; /* Ensure it's above the overlay initially */
  }

  .circle.clicked {
    width: 100vw; /* Full width of the viewport */
    height: 100vh; /* Full height of the viewport */
    border-radius: 0; /* Remove border-radius for full coverage */
    transform: translate(-50%, -50%) scale(10); /* Adjust scale based on your needs */
  }

  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff; /* Change the color as needed */
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.5s ease-in-out;
    z-index: -1; /* Place it below the circle initially */
  }
        
        </style>
    </head>
    <body>
        <div class="circle" id="trigger-l">SIGN UP</div>  
        <div class="overlay" id="overlay"></div>

        <div class="gold-frame">
            <div class="log-in"><strong>LOGIN</strong></div>

            <div class="inp2">
            <form action="../BE/signup-login-contr.php" method="POST" name="login">
                <label for="email">Email </label><br>
                <input type="email" id="un-email" name="email" class="input" required>
                <br><br><br>
                <label for="pass">Password</label><br>
                <input type="password" id="pass" name="pass" class="custom-input" required>
                <div class="forgot-pass"><a href=""><br>Forgot Password</a></div>
            
            </div>
            <div class="login-div"><input type="submit" class="login" name="login" value="login"></div>
            </form>
        </div>
    
    <script src="../assets/js/signup.js"></script>
    </body>
</html>