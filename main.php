<html>
    <head>
        <meta charset="UTF-8">
        <title>e-vaccine</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
         <link rel="stylesheet" href="new2.css">
    </head>
    <body>
        <div>
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
            </nav>
                <div class="row">
                <br><br><br><br><br><br><br><br>
                <div class="col"><br><br><br><br><br><br>
                    <h1 style="color: white;padding-left: 10px;font-weight: bold;font-size: 60px">Find a Vaccine near you</h1><br>
                    <h4 style="color: white;padding-left: 10px">Use e-Vaccine to find a location near you, then call or visit their website to make an appointment.</h4><br>
                    <center><button class="newb"><a href="login.php" style="color: white">Find Vaccines</a></button></center>
                </div>
                <div class="col">
                    <img src="fam.jpg" height="650px" width="500px">
                </div>
                </div>
            </header>
            <div class="content">
                <br><br><br><br>
                <form>
                <div class="d-flex justify-content-center">
                <div class="input-group w-auto">
                <input type="text" class="form-control" placeholder="search for vaccines"  aria-label="Example input" aria-describedby="button-addon1">
                <button class=" btn btn-success" id="button-addon1" type="button">search</button>
                </div>
                </div>
                </form>
                <h3 style="color: white">Vaccine Details</h3>
                <table border="3" class="table table-success">
                    <tr>
                        <td>Birth</td>
                        <td>BCG, Hep B1, OPV</td>
                    </tr>
                    <tr>
                        <td>6 weeks</td>
                        <td>DTwP /DTaP1, Hib-1, IPV-1, Hep B2, PCV 1,Rota-1</td>
                    </tr>
                    <tr>
                        <td>10 weeks</td>
                        <td>DTwP /DTaP2, Hib-2, IPV-2, Hep B3, PCV 2, Rota-2</td>
                    </tr>
                    <tr>
                        <td>14 weeks</td>
                        <td>DTwP /DTaP3, Hib-3, IPV-3, Hep B4, PCV 3, Rota-3*</td>
                    </tr>
                    <tr>
                        <td>6 months</td>
                        <td>Influenza-1</td>
                    </tr>
                    <tr>
                        <td>7 months</td>
                        <td>Influenza -2</td>
                    </tr>
                    <tr>
                        <td>6-9 months</td>
                        <td>Typhoid Conjugate Vaccine</td>
                    </tr>
                    <tr>
                        <td>12 months</td>
                        <td>Hepatitis A- 1</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
