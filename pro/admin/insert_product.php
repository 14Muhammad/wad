<?php
$con = mysqli_connect("localhost", "root", "", "tech_box_db");
if (!$con)
    die("Connection failed");
?>
<?php


if (isset($_POST['insert_pro'])) {
    //getting text data from the fields
    $pro_title = test_input($_POST['pro_title']);
    $pro_cat = test_input($_POST['pro_cat']);
    $pro_brand = test_input($_POST['pro_brand']);
    $pro_price = test_input($_POST['pro_price']);
    $pro_desc = test_input($_POST['pro_desc']);
    $pro_keywords = test_input($_POST['pro_keywords']);
    //getting image from the field
    $pro_image_name = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];
    $pro_image_size = $_FILES['pro_image']['size'];

    if (!preg_match("/[a-zA-Z0-9]+/", $pro_title) || strlen($pro_title) < 2) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Product title."
        );
    } else if ($pro_cat == "Select Category") {
        $response = array(
            "type" => "warning",
            "message" => "Select Product Category."
        );
    } else if ($pro_brand == "Select Brand") {
        $response = array(
            "type" => "warning",
            "message" => "Select Product Brand."
        );
    } else if (!preg_match("/\d+(.\d+)?/", $pro_price && $pro_price > 0)) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid Product Price."
        );
    } else if (file_exists($pro_image_tmp)) {

        $image_info = getimagesize($pro_image_tmp);
        $width = $image_info[0];
        $height = $image_info[1];
        $target_directory = "product_images/";
        $allowed_image_extension = array("png", "jpg", "jpeg");

        // Get image file extension
        $image_extension = pathinfo($pro_image_name, PATHINFO_EXTENSION);

        // Validate file input to check if is not empty
        // Validate file input to check if is with valid extension
        if (!in_array($image_extension, $allowed_image_extension)) {
            $response = array(
                "type" => "warning",
                "message" => "Upload valid images. Only PNG and JPEG are allowed."
            );
            //echo $result;
        }    // Validate image file size
        else if ($pro_image_size > 2000000) {
            $response = array(
                "type" => "warning",
                "message" => "Image size exceeds 2MB"
            );
        }    // Validate image file dimension
        else if ($width > "1000" || $height > "800") {
            $response = array(
                "type" => "warning",
                "message" => "Image dimension should be within 1000X800"
            );
        } else {
            $updated_img_name = "user_" . time() . "_" . $pro_image_name;
            $target = $target_directory . $updated_img_name;
            if (move_uploaded_file($pro_image_tmp, $target)) {

                $insert_product = "insert into products (pro_cat, pro_brand,pro_title,pro_price,pro_desc,pro_keywords,pro_image) 
                  VALUES ('$pro_cat','$pro_brand','$pro_title','$pro_price','$pro_desc','$pro_keywords','$updated_img_name');";
                $insert_pro = mysqli_query($con, $insert_product);
                if ($insert_pro) {
                    //header("location: ".$_SERVER['PHP_SELF']);
                    $response = array(
                        "type" => "success",
                        "message" => "Product uploaded successfully."
                    );
                }


            } else {
                $response = array(
                    "type" => "warning",
                    "message" => "Problem in uploading image files."
                );
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
    Product </h1>
<?php if (!empty($response)) { ?>
    <div class="alert alert-<?php echo $response["type"]; ?>">
        <?php echo $response["message"]; ?>
    </div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
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
                       placeholder="Enter Product Title"
                    <?php
                    if (@$response["type"] == "warning") {
                        echo "value='$pro_title'";
                    }
                    ?>
                >
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
                    $getCatsResult = mysqli_query($con, $getCatsQuery);
                    while ($row = mysqli_fetch_assoc($getCatsResult)) {
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];
                        if (@$response["type"] == "warning" && $cat_id == $pro_cat) {
                            echo "<option value='$cat_id' selected>$cat_title</option>";
                        } else {
                            echo "<option value='$cat_id'>$cat_title</option>";
                        }
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
                    $getBrandsResult = mysqli_query($con, $getBrandsQuery);
                    while ($row = mysqli_fetch_assoc($getBrandsResult)) {
                        $brand_id = $row['brand_id'];
                        $brand_title = $row['brand_title'];

                        if ($response["type"] == "warning" && $brand_id == $pro_brand) {
                            echo "<option value='$brand_id' selected>$brand_title</option>";
                        } else {
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }

                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span>
                Image:</label>
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
                <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price"
                    <?php
                    if (@$response["type"] == "warning") {
                        echo "value='$pro_price'";
                    }
                    ?>
                >
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="pro_kw" class="float-md-right"><span class="d-sm-none d-md-inline"> Product </span>
                Keyword:</label>
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