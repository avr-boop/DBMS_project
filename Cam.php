<?php
    $link=mysqli_connect('localhost:3308','root','','ecommerce');
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width-device-width">
    <title>
        Tech Shopping mart
    </title>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-1">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-row-gap: 2em;
        }
        .divclass {
            width: 35px;
            height: 5px;
            background-color: black;
            margin: 6px 0;
        }
        .split {
            position: relative;
            width: 100%;
            float: left;
            height: 100%;
            background-image: linear-gradient(to bottom right, aliceblue, navajowhite);;
            z-index: 1010101010
        }

        .split2 {
            position: relative;
            width: 100%;
            float: left;
            height: 100%;
            background-image: linear-gradient(to bottom right, azure, lavenderblush);
            z-index: 1010101010
        }

        }
    </style>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
        <div class="container-fluid" style="background-color: #494f54 ; color: lightgoldenrodyellow">
            <div class="container">
            <p style="text-align: end; color: #e2e3e5">Contact for queries</p>
            </div>
        </div>
        <div class="container"><h1 align="center"><font face="Times New Roman">Tech Shopin mart</font></font></h1></div>
        <div class="container">
            <div class="container" style="background: linear-gradient(100deg,bisque,#7abaff); color: white;">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar ">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
                                    <span class="icon-bar"><div class="divclass"></div>
                                <div class="divclass"></div>
                                <div class="divclass"></div></span>
                                    <!--<span class="icon-bar">--</span>
                                    <span class="icon-bar">--</span>-->
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="mystyle">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php" class="active"><font color="#2d2d2d">Home</font></a></li>
                                    <li><a href="contact.php"><font color="#2d2d2d">Contact</font></a></li>
                                </ul>
                                <div>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
        <br/>
        <div class="container" style="white-space: nowrap" >
            <div class="col-sm-2" style="background-color: #f5c6cb;color: #23272b;white-space: nowrap">
                <div class="split">
                    <div class="centered">
                        <h1 align="center" >Brand</h1>
                        <center >
                            <p>
                                <a href="dell.php" style="color: #23272b;">Dell</a><br/>
                                <a href="samsung.php" style="color: #23272b;">Samsung</a><br/>
                                <a href="Canon.php" style="color: #23272b;">Canon</a><br/>
                                <a href="Hp.php" style="color: #23272b;">Hp</a><br/>
                            </p>
                        </center>
                    </div>
                </div>
                <div class="split2">
                   <div class="centered">
                        <h1 align="center">Gadget</h1>
                        <center >
                            <p>
                                <a href="Mobile.php" style="color: #23272b;">Mobile</a><br/>
                                <a href="Lap.php" style="color: #23272b;">Laptop</a><br/>
                                <a href="Cam.php" style="color: #23272b;">Camera</a><br/>
                                <a href="tv.php" style="color: #23272b;">TV</a><br/>
                            </p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-sm-10" style="white-space: nowrap;display: inline-block">
                <?php
                /*$q="select * from products limit 0,6";
                $run=mysqli_query($link,$q,MYSQLI_USE_RESULT);
                while ($row=mysqli_fetch_array($run))
                {
                    $name=$row['Name'];
                    $img=$row['Image'];
                }*/
                ?>
                <div class="grid-container ">
                        <?php
                        $d2="Dell";
                        $q='select * from products where Category="Camera";';
                        $run=mysqli_query($link,$q,MYSQLI_USE_RESULT);

                        while ($row=mysqli_fetch_array($run)) {
                            $name = $row['Name'];
                            $img = $row['Image'];
                            $brand = $row['Brand'];
                            $price=$row['Price'];
                            $model_name = $brand.' ' .$name.'!'.$price;
                            echo "<div class='container' style=' display: flex; flex-direction: column;'><img src='admin_Side/c/$img' width='150px' height='150px' style='margin-bottom: 1em'> <form action='b.php' method='get'><button name='desc' value='$model_name'>Buy Now</button></form></div>";
                        }
                        ?>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
</body>
</html>