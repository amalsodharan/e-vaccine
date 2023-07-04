<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
         <link rel="stylesheet" href="logincss.css">
    
    </head>
    <body>
         <header>
            <nav>
            <div class="row">
                <div class="col-1">
                        <img src="pic.jpg" style="height: 70px;width: 70px">
                </div>
                <div class="col-4">
                    <h2 style="padding-top: 10px">e-Vaccine</h2>
                </div>
                <div class="col-6" id="but">
                    <button class="btn btn-outline-success btn-sm"><a href="#">HOME</a></button>
                    <button class="btn btn-outline-success btn-sm"><a href="#">VACCINES</a></button>
                    <button class="btn btn-outline-success btn-sm"><a href="#">ABOUT US</a></button>
                    <button class="btn btn-outline-success btn-sm"><a href="#">CONTACT US</a></button>
                </div>
            </div>
        <div class="sidebar">
            <a href="main.php">Home</a>
            <a class="active" href="#news">Log in</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
            </nav>
            </header>
        <div class="last">
                <center>
                    <br><br><br><br><br>
                    <form action="logindb.php">
                    <h2 style="color: white">New User?</h2>
                    <h5 style="color: white">Enter your vaccination details</h5><br>
                    <input type="text" placeholder="Enter your name" class="bar2" required name="name"><br><br>
                    <input type="text" placeholder="Enter your age" class="bar2" required name="age"><br><br>
                    <input type="text" placeholder="Enter your email" class="bar2" required name="email"><br><br>
                    <input type="password" placeholder="Enter your password" class="bar2" required name="pass"><br><br>
                    <p style="color: white">Already a user?<a href="login2.php"><u>Log in</u></a></p><br>
                    <input type="submit" value="register" class="btn btn-success">
                </form>
                </center>
        </div>
        </body>
</html>
