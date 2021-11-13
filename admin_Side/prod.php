
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
                                <li><a href="ahome.php" class="active"><font color="#2d2d2d">Home</font></a></li>
                                <li><a href="prod.php"><font color="#2d2d2d">Products</font></a></li>
                                <li><a href="sell.php"><font color="#2d2d2d">Sell</font></a></li>
                                <li><a href="index.php"><font color="#2d2d2d">Logout</a></font></li>
                            </ul>
                            <div>
                    </nav>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <h2><center style="color: #212529;"><b>Product</b></center></h2>
        <center><a href="insert_prod.php"><p style="color: #121416;">Insert Product</p></a></center>
        <br/>

    </div>
    <br>
    <br>
</div>
</body>
