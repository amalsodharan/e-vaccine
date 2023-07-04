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
                <form>
                    <h2 style="color: white">Log in</h2><br>
                    <input type="text" placeholder="Enter your email" class="bar2" required><br><br>
                    <input type="password" placeholder="Enter your password" class="bar2" required><br><br>
                    <p style="color: white"><a href="#">forget password?</a></p><br>
                    <input type="submit" value="log in" class="btn btn-success">
                </form>
                </center>
        </div>        
    </body>
</html>
