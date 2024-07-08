<?php

use AD\model\Text_Mid;

if (!isset($_SESSION["user"])) {
    header("Location: ?act=Signin");
    exit();
}

$textmid=new Text_Mid();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];
    $title=$_POST['title'];
    $des=$_POST['des'];
    if($bannerbot->updateTextMid($id,$title,$des))
    {
        header("Location: ?act=home");
        exit(); 
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
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
            max-width: 600px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
        }
        .btn-submit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        .form-group input[type="text"],
        .form-group textarea {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h2 class="mb-4 text-center">Thông Tin Chi Tiết</h2>
        <form action="?act=editForm" method="post">
            <div class="form-group">
                <label for="id" class="form-label">ID (Chỉ Đọc):</label>
                <input type="text" class="form-control" id="id" name="id" value="<?php echo htmlspecialchars($id, ENT_QUOTES); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title, ENT_QUOTES); ?>" required>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="des" name="des" rows="4" required value="<?php echo htmlspecialchars($des, ENT_QUOTES); ?>"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-submit">Sửa</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

