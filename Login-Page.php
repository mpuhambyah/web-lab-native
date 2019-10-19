<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="style.css" rel="stylesheet" />
    <link href="animate.css" rel="stylesheet" />
</head>
<body>
<div class="container-fluid login-page" style="padding:15px">
    <div class="row" style="height: 100%;max-width:1500px;margin:auto;background-color:white">
        <div class="col-sm" style="background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(117, 19, 93, 0.73)),url('Image/pict2.jpg');background-size:cover;background-position:center">
        </div>
        <div class="col-sm-8 text-center">
            <div style=" font-family: Poppins-Bold;background: -webkit-linear-gradient(rgba(245, 246, 252, 1), rgba(117, 19, 93, 1));-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size:60px;letter-spacing:3px;padding-top:20%">
                ARSICOM<br>
            </div>
            <div class="txt3">
                <h5>area diskusi komputer</h5>
            </div>
            <br>
            <form name="login-form-username" action="login.php">
                <input type="text" name="user" id="user" placeholder="Username" autocomplete="off">
            </form>
            <form name="login-form-password" action="login.php">
                <input type="password" name="pass" id="pass" placeholder="Password">
            </form>
            <button class="btn" style="font-size:25px" name="login-btn" type="submit">LOGIN</button>
            <div>
                <br>
                <span class="txt1">
                    forgot
                </span> 
                <a href="#" class="txt2" style="text-decoration: none">
                    username/password?
            </div>  
            <a href="Buat-Akun.php" style="font-size: 20px;text-decoration: none;font-family: Poppins-Bold;">
                SIGN UP
            </a>
        </div>
    </div>
</div>
</body>
