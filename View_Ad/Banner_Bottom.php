<?php
    if(!isset($_SESSION["user"]))
    header("Location: ?act=Signin");
    exit(); 
?>
use AD\model\Banner_Bottom;

$bannerbottom=new Banner_Bottom();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sửa Thông Tin</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mt-5">Sửa Thông Tin</h3>
                <form action="your_update_script.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="currentImg">Hình ảnh hiện tại</label>
                        <div class="mb-3">
                            <img src="current_image.jpg" alt="Current Image" class="img-thumbnail" id="currentImg">
                        </div>
                        <label for="img">Chọn hình ảnh mới</label>
                        <input type="file" class="form-control-file" id="img" name="img" value="<?php echo $bannerbottom->getImg() ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Xác nhận sửa</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
