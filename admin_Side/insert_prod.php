
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
    <div class="container"><h1 align="center"><font face="Lucida Handwriting">Tech Shopin mart</font></font></h1></div>
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
        <h2><center style="color: #212529;"><b>Insert Product Below:</b></center></h2>
        <br/>
        <form action="" method="post" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" name="Name" placeholder="Enter Product Name" class="form-control" required="required"/>
                </td>
            </tr>
            <tr>
                <td>
                    Category
                </td>
                <td>
                <select name="Category">
                    <option>Mobile</option>
                    <option>Laptop</option>
                    <option>Camera</option>
                    <option>TV</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    Brand
                </td>
                <td>
                    <select name="Brand">
                        <option>Dell</option>
                        <option>Samsung</option>
                        <option>Canon</option>
                        <option>Hp</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Image
                </td>
                <td>
                    <input type="file" name="Image"/>
                </td>
            </tr>
            <tr>
                <td>
                    Price
                </td>
                <td>
                    <input type="text" name="Price" placeholder="Enter Price" class="form-control" required="required"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Save" class="btn-outline-primary"/>
                </td>
            </tr>
        </table>
        </form>
        <?php
            if(isset($_POST["Submit"]))
            {
                $link=mysqli_connect('localhost:3308','root',"",'ecommerce');
                $name=$_POST['Name'];
                $category=$_POST['Category'];
                $brand=$_POST['Brand'];
                $price=$_POST['Price'];
                $image=$_FILES['Image']['name'];
                $image_tap=$_FILES['Image']['tmp_name'];
                $sql='insert into products(Name,Category,Brand,Price,Image) values("'.$name.'","'.$category.'","'.$brand.'","'.$price.'","'.$image.'");';
                move_uploaded_file($image_tap,"c/$image");
                //echo $name.'","'.$category.'","'.$brand.'","'.$price.'","'.$image;
                if(mysqli_query($link,$sql,MYSQLI_USE_RESULT))
                {
                    echo "<script>alert('saved')</script>";
                }
                else
                {
                    echo "<script>alert('not saved')</script>";
                }
            }
        ?>
    </div>
    <br>
    <br>
</div>
</body>
