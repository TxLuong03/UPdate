<?php
use AD\model\Banner_Dream;

$bannerdream=new Banner_Dream();

$items = $bannerdream->getA();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartnav Items</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <?php foreach ($items as $item): ?>
                <?php
                // Xây dựng URL với các tham số
                $url = '?act=processingCartNav&id=' . urlencode($item["id"]) . 
                       '&title=' . urlencode($item["title"]) . 
                       '&img=' . urlencode($item["img"]) . 
                       '&description=' . urlencode($item["des"]);
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $item['img']; ?>" class="card-img-top" alt="<?php echo $item['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['title']; ?></h5>
                            <p class="card-text"><?php echo $item['des']; ?></p>
                            <a href="<?php echo $url; ?>" class="btn btn-primary">EDIT</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
