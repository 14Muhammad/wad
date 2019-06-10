<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","root","","tech_box_db");
if(!$con)
    die("Connection failed");
?>
<?php

if(isset($_POST['insert_pro'])){
    //getting text data from the fields
    $pro_title = $_POST['pro_title'];
    $pro_cat = $_POST['pro_cat'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];
    $pro_keywords = $_POST['pro_keywords'];



    $insert_product = "insert into products (pro_cat, pro_brand,pro_title,pro_price,pro_desc,pro_keywords) 
                  VALUES ('$pro_cat','$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_keywords');";
    $insert_pro = mysqli_query($con, $insert_product);
    if($insert_pro){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startup</title>
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
        Product </h1>
    <form action="" method="post">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span>
                    Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="pro_title"
                           placeholder="Enter Product Title">
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span>
                    Category:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                    </div>
                    <select class="form-control" id="pro_cat" name="pro_cat">
                        <option>Select Category</option>
                        <?php
                            $getCatsQuery = "select * from categories";
                            $getCatsResult = mysqli_query($con,$getCatsQuery);
                            while($row = mysqli_fetch_assoc($getCatsResult)){
                                $cat_id = $row['cat_id'];
                                $cat_title = $row['cat_title'];
                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span>
                    Brand:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Brand</option>
                        <?php
                            $getBrandsQuery = "select * from brands";
                            $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                            while($row = mysqli_fetch_assoc($getBrandsResult)){
                                $brand_id = $row['brand_id'];
                                $brand_title = $row['brand_title'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                            ?>
                    </select>
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Image:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-image"></i></div>
                    </div>
                    <input class="form-control" type="file" id="pro_image" name="pro_image">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span>
                    Price:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                </div>
            </div>
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span> Keyword:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                    </div>
                    <input class="form-control" type="text" id="pro_keywords" name="pro_keywords"
                           placeholder="Enter Product Keywords">
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span>
                    Detail:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="pro_desc" name="pro_desc"
                              placeholder="Enter Product Detail"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_pro" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                    Insert Now
                </button>
            </div>
        </div>
    </form>
</div>

</body>
</html>