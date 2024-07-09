<?php
if (!isset($_SESSION["user"])) {
    header("Location: ?act=Signin");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Lựa Chọn</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Form Lựa Chọn</h3>
        <form action="your_action_page.php" method="post">
            <div class="form-group">
                <label for="selectOption">Chọn một tùy chọn:</label>
                <select class="form-control" id="selectOption" name="selectOption">
                    <option value="option1"><a href="?act=Banner_Top" >Banner Top</a></option>
                    <option value="option2"><a href="?act=Banner_Mid" >Banner Mid</a></option>
                    <option value="option3"><a href="?act=Banner_Bottom" >Banner Bottom</a></option>
                    <option value="option4"><a href="?act=Banner_Dream" >Banner Dream</a></option>
                    <option value="option5"><a href="?act=Banner_Slide_Mid_1" >Banner Slide Mid 1</a></option>
                    <option value="option6"><a href="?act=Banner_Slide_Mid_2" >Banner Slide Mid 2</a></option>
                    <option value="option7"><a href="?act=Banner_Slide_Mid_3" >Banner Slide Mid 3</a></option>
                    <option value="option8"><a href="?act=Text_Mid_Update">Text Mid</a>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Xác nhận</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

