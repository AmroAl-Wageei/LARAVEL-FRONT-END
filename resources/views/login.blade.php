<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website for dental clinic in aqaba country ">
    <meta name="author" content=" Amro Salah  Al - Wageei">
    <meta name=" Keyword " content=" dentist , clinic , Aqaba , jordan , braces , dentist near me ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Amro Al - Wageei ">
    <meta name="refresh" content=" 1 ">
    <title> Login  </title>
</head>

        {{-- Title Icon  --}}
        <link rel="icon" href="../images/logo_icon.png" type="image/icon type">
        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('CSS/register.css')}}">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<style>

    body {
        background: url('../images/Register/Login.png');
        opacity: 0.8;
        background-repeat: no-repeat;
        background-size:cover; 
        height: 60vh;
        width: 90vw;
  }
</style>
<body>
    

    <div class="register">


        <div class="Form_login">

            <h1> Login </h1>

            <form action="./index.html" method="post">

                <input type="email" name="" id="" placeholder="Email">
                <input type="password" name="" id="" placeholder="Password">

                <div class="recover">
                    <a href="#"> Forget Password?</a>
                </div>
                
            </form>

            <button> Login </button>

            <div class="member">
                Not a member? <a href="./Register.html"> 
                    Register Now
                </a>
            </div>
            
        </div>

    </div>

</body>
</html>