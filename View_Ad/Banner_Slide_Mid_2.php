<?php
use AD\model\Banner_Slide_Mid_2;

$bannerslidemid2= new Banner_Slide_Mid_2();

$items = $bannerslidemid2->getA();
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
                $url = '?act=processingBannerSlideMid2Update&id=' . urlencode($item["id"]) . 
                       '&title=' . urlencode($item["title"]) . 
                       '&button=' . urlencode($item["button"]).
                       '&img=' . urlencode($item["img"]) . 
                       '&des=' . urlencode($item["des"]) ;
                       
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $item['img']; ?>" class="card-img-top" alt="<?php echo $item['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['title']; ?></h5>
                            <p class="card-text"><?php echo $item['des']; ?></p>
                            <a href="<?php echo $url; ?>" class="btn btn-primary"><?php echo $item['button']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
