<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<?php
    use AD\model\Banner_Dream;

 if (!isset($_SESSION["user"])) {
    header("Location: ?act=Signin");
    exit();
}  
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $image = $_POST["img"];
    $des = $_POST["des"];

    $bannerdream=new Banner_Dream();

    if($cartnav->updateBannerDream($id,$title,$img,$des) == true){
        header("Location:?act=Banner_Dream");
    }else{
        echo "Error";
    }
}
?>
<body>
    <div class="container form-container">
        <form action="/submit-edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo htmlspecialchars($_GET['id'] ?? '', ENT_QUOTES); ?> readonly>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" alue="<?php echo htmlspecialchars($_GET['title'] ?? '', ENT_QUOTES); ?>" requỉed>
            </div>

            <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" class="form-control-file" id="img" name="img" value="<?php echo htmlspecialchars($_GET['img'] ?? '', ENT_QUOTES); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="des" name="des" rows="2" value="<?php echo htmlspecialchars($_GET['des'] ?? '', ENT_QUOTES); ?>" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

