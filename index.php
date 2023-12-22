<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>Sign Up Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #000; 
      /* color: #fff;  */
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: "Times New Roman", serif;
    }

    a{
        text-decoration: none;
        color: black;
        font-weight: bold;
    }

    .gold-frame {
      /* border: 8px solid #cda45e; */
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 
      /* text-align: center; */
      height: 500px;
      width: 600px;
      background-color: #cda45e;
      position:relative;
      overflow: hidden;
    }

    .info{
      border: 8px solid #cda45e;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); 
      text-align: center;
      height: 396px;
      width: 584px;
      background-color: black;
      position:absolute;
      z-index: 9;
      transition: transform 0.5s ease-in-out;
      border-top-left-radius: 150px;
      bottom:0;
    }

    hr{
        border:3px solid black;
        margin-top: 20px;
        margin-bottom: 0px;
    }

    .sign-up{
        margin-top: 20px;
        font-family: "Times New Roman", serif;
        color: black;
        font-size: 38px;
        margin-left: 237px;
    }

.input-container {
    position: relative;
    width: 584px; 
    margin-left: 28px;
    padding-top: 25px;
}

.inp1{
    display: inline-block;
    margin-right: 55px;
    margin-top: 25px;
}

.custom-input {
    width: 200px;
    height: 20px;
    background: #cda45e;
    padding: 5px;
    font-size: 14px;
}

.header-text{
    font-size: 26px;
    font-weight: bold;
    padding-right: 50px;
    color: #cda45e;
    margin-bottom: 1px;
}
    
label{
    color: #cda45e;
    font-size: 17px;
}

.continue-button{
    position: absolute;
    right: 0;
    margin-top: 40px;
    margin-right: 75px;
    font-size: 18px;
    color: #cda45e;
    opacity: 0.7;
    cursor: pointer;
} 

.continue-button:hover{
    font-weight: bold;
}

.page2{
    height: 403px;
    position: absolute;
    width: 585px;
    margin-left: 8px;
}

.headers{
    margin-top: 25px;
    font-size: 22px;
    color: black;
}

.signUp-div{
    margin-right: 200px;
}


.continue-button:active{
    color:beige;
}

.back-button{
    position: absolute;
    bottom:0;
    left:0;
    /* margin-bottom: 12px; */
    margin-left: 44px;
    z-index: 5;
    font-size: 17px;
    color: black;
    opacity: 0.7;
    cursor: pointer;
    font-size: 18px;
}

.back-button:hover{
    font-weight: bold;
}

.back-button:active{
    color:beige;
}

.signUp{
    width: 118px;
    height: 32px;
    font-size: 17px;
    border-radius: 1px;
    position: absolute;
    bottom:0;
    right:0;
    /* margin-bottom: 20px; */
    margin-right: 27px;
    /* margin-top: 325px; */
    font-family: "Times New Roman", serif;
    margin-left: 270px;
    /* z-index: 5; */
    background-color: black;
    cursor: pointer;
    color: #cda45e;
}

.clear{
    width: 118px;
    height: 32px;
    font-size: 17px;
    border-radius: 1px;
    position: absolute; 
    bottom:0;
    right:0;
    /* margin-bottom: 20px; */
    margin-right: 160px;
    /* margin-top: 325px; */
    margin-left: 150px;
    /* z-index: 5;  */
    background-color: black; 
    cursor: pointer;
    color: #cda45e;
    font-family: "Times New Roman", serif;
}

#black-label{
    color: black;
}

.next-cont{
    position: absolute;
    margin-left: 40px;
    margin-top: 30px;
}

.next-cont2{
    position:absolute;
    right: 0;
    width: 259px;
    margin-top: 50px;
    height: 300px;
}

.vl {
    border-left: 2px solid black;
    height: 300px;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 0;
    z-index:4;
    /* background-color: rgb(39, 20, 30); */
    margin-top: 30px;
}

.priv{
    position: absolute;
    bottom: 0;
    margin-left: 175px;
    margin-bottom: 43px;
}

.circle {
    position: absolute;
    top: 0;
    right: 0;
    width: 130px;
    height: 100px;
    background-color: #cda45e;
    border-radius: 0 0 0 100%;
    text-align: center;
    color: black;
    font-weight: bold;
    cursor: pointer;
    padding-top: 50px;
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

<div class="circle" id="trigger-s">LOGIN</div>  
<div class="overlay" id="overlay"></div>


<div class="gold-frame">
    <div class="sign-up"><strong>SIGN UP</strong></div>
    <!-- <hr> -->

    <div class="page2">
        <div class="vl"></div>
        <div class="next-cont">
            <form action="BE/signup-login-contr.php" method="POST" id="signup-form" name="signup-form">
            <div class="headers"><strong>Gender</strong></div>
            <input type="radio" name="sex" checked id="male" value="m">
            <label for="male" id="black-label">Male</label>
            <input type="radio" name="sex" id="female" value="f">
            <label for="female" id="black-label">Female</label>
            <input type="radio" name="sex" id="other" value="o">
            <label for="other" id="black-label">Other</label><br><br><br>
            <label for="d" id="black-label" style="font-size: 22px;"><strong>Date of birth</strong></label><br>
            <input type="date" id="dob" name="dob" style="background-color: #cda45e;"><br><br><br><br>
            
            <label for="artisticStyle" id="black-label" style="font-size: 22px;"><strong>Artistic Style</strong></label><br>
            <select id="artisticStyle" name="artisticStyle" style="background-color: #cda45e;">
                <option value="realism">Realism</option>
                <option value="abstract">Abstract</option>
                <option value="impressionism">Impressionism</option>
                <option value="cubism">Cubism</option>
                <option value="surrealism">Surrealism</option>
                <option value="popart">Pop Art</option>
                <option value="modern">Modern Art</option>
                <!-- Add more options as needed -->
            </select>

            
        </div>

        <div class="priv">
                <input type="checkbox" id="check" name="priv" required>
                <label id="black-label">I agree to the <a href="">Privacy Policy</a></label>
        </div>

        <div class="next-cont2">
            <label for="artisticSkills" id="black-label" style="font-size: 22px;"><strong>Artistic Skill</strong></label><br>
            <select id="artisticSkill" name="artisticSkill" style="background-color: #cda45e;">
                <option value="drawing">Drawing</option>
                <option value="painting">Painting</option>
                <option value="sculpting">Sculpting</option>
                <option value="digitalArt">Digital Art</option>
                <option value="photography">Photography</option>
                <option value="printmaking">Printmaking</option>
                <option value="ceramics">Ceramics</option>
                <!-- Add more options as needed -->
            </select>
            <br><br><br>

            <label for="expertiseLevel" id="black-label" style="font-size: 22px;"><strong>Expertise Level</strong></label><br>
            <select id="expertiseLevel" name="expertiseLevel" style="background-color: #cda45e; ">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select><br><br><br><br><br><br>


            <div style="position: absolute; bottom:0; margin-bottom: 95px;"><strong>Explore the gallery or actively collaborate?</strong></div>
            <input type="checkbox" name="choice" id="viewGalleryRadio"> 
            <label for="viewGalleryRadio" id="black-label">View Gallery</label>

            <input type="checkbox" name="choice" id="collaborateRadio"> 
            <label for="collaborateRadio" id="black-label">Collaborate</label>
            
    
        </div>

        <div class="signUp-div">
            <input type="submit" class="signUp" name="signup" value="Sign Up">
            <input type="button" class="clear" name="clear" value="Clear" onclick="ClearForm()">                      
        </div> 
        
        <span id="visible" class="back-button">Back</span>
    </div>

    <div class="info" id="Div">
            <!-- <div id="Div" class="hid"> -->
                <div class="input-container">
                    <div class="header-text">Create Account</div><br>
                    <div class="inp1">
                        <label for="fn">Full Name</label>
                        <br><input type="text" name="fname" id="fname" class="custom-input" required>
                    </div>

                    <div class="inp1">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id="email" class="custom-input" required>    
                    </div>

                    <div class="inp1">
                        <label for="pass">Password</label><br>
                        <input type="password" name="pass" id="pass" class="custom-input" required>
                    </div>

                    <div class="inp1">
                        <label for="pas" style="margin-left: 5px;">Confirm Password</label><br>
                        <input type="password" name="cpass" id="cpass" class="custom-input" style="margin-left: 0px;" required><br>
                    </div>
                    
                    <div class="inp1">
                        <label for="un">Username</label><br>
                        <input type="text" name="un" id="un" class="custom-input" required>
                    </div>

                    <br>
                    <div id="button" class="continue-button">continue ></div>
                </div>
            <!-- </div> -->
        </form>
    </div>
  </div>

<script src="assets/js/signup.js"></script>
</body>
</html>
