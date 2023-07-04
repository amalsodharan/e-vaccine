<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $name=$_REQUEST['name'];
            $age=$_REQUEST['age'];
            $email=$_REQUEST['email'];
            $pass=$_REQUEST['pass'];
            $con= mysql_connect("localhost","root","");
            mysql_selectdb("evaccine",$con);
            $qry="insert into login values('$name','$age','$email','$pass')";
            $cnt=  mysql_query($qry,$con);
                    if($cnt>0)
                        echo "saved";
        ?>
    </body>
</html>
