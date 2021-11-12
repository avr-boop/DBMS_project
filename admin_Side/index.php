<?php
if(isset($_POST['Submit']))
{
    $link=mysqli_connect('localhost:3308','root',"",'ecommerce');
    $name=$_POST['Username'];
    $pass=$_POST['Password'];
    $query='select * from admin';
    $var=mysqli_query($link,$query);
    $tuple=mysqli_fetch_array($var);
    $u=$tuple['username'];
    //echo $u;
    $p=$tuple['password'];
}
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
    <div class="container"><h1 align="center"><font face="Lucida Handwriting">Tech Shopin mart</font></font></h1></div>
    <div class="container">
        <div class="container" style="background: linear-gradient(100deg,bisque,#7abaff); color: white;">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar ">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
                                <span class="icon-bar">_</span>
                                <!--<span class="icon-bar">--</span>
                                <span class="icon-bar">--</span>-->
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mystyle">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php" class="active"><font color="#2d2d2d">Home</font></a></li>
                                <li><a href="#"><font color="#2d2d2d">About</font></a></li>
                                <li><a href="#"><font color="#2d2d2d">Contact</font></a></li>
                                <li><a href="#"><font color="#2d2d2d">Help</a></font></li>
                            </ul>
                            <div>
                    </nav>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <h2><center><b>Login</b></center></h2>
        <br/>
        <form action="index.php" method="post">
        <table class="table">
            <tr>
            <td>
                <p>
                  Enter Username:
                </p>
            </td>
            <td>
                <input type="text" name="Username" placeholder="Enter Your Username" class="form-control" required="required"/>
            </td>
            </tr>
            <tr>
                <td>
                    <p>
                        Enter Password:
                    </p>
                </td>
                <td>
                    <input type="password" name="Password" placeholder="Enter Your Password" class="form-control" required="required"/>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Submit" name="Submit" class="btn btn-primary" style="color: #1b1e21">
                </td>
            </tr>
        </table>
        </form>
    </div>
    <br>
    <br>
</div>
</body>
