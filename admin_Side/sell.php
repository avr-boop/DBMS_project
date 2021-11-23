
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
        <h1><center><b>BOOKED LIST</b></center></h1>
        <table class ="table">
            <tr>
                <td>Mobile</td>
                <td>Brand</td>
                <td>Price</td>
                <td>Name</td>
                <td>Address</td>
                <td>City</td>
                <td>State</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <?php
                        $sql2="select * from sell";
                        $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                        $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                        while($row2=mysqli_fetch_array($run2))
                        {
                            $mobile=$row2['Mobile'];
                            echo $mobile;
                            echo "<br/>";
                        }
                        ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $model=$row2['Model'];
                        echo $model;
                        echo "<br/>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $price=$row2['Price'];
                        echo $price;
                        echo "<br/>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $name=$row2['Name'];
                        echo $name;
                        echo "<br/>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $address=$row2['Address'];
                        echo $address;
                        echo "<br/>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $city=$row2['City'];
                        echo $city;
                        echo "<br/>";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    $sql2="select * from sell";
                    $link2=mysqli_connect('localhost:3308','root','','ecommerce');
                    $run2=mysqli_query($link2,$sql2,MYSQLI_USE_RESULT);
                    while($row2=mysqli_fetch_array($run2))
                    {
                        $state=$row2['State'];
                        echo $state;
                        echo "<br/>";
                    }
                    ?>
                </td>

            </tr>
        </table>
        <br/>

    </div>
    <br>
    <br>
</div>
</body>
