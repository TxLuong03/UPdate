<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    use AD\model\Banner_Top;
    use AD\model\Banner_Mid;
    use AD\model\Banner_Bottom;
    use AD\model\Banner_Dream;
    use AD\model\Banner_Slide_Mid_1;
    use AD\model\Banner_Slide_Mid_2;
    use AD\model\Banner_Slide_Mid_3;
    use AD\model\TextMid;

    require_once "./connect/connect.php";

    $bannertop=new Banner_Top();
    $bannermid=new Banner_Mid();
    $bannerbottom=new Banner_Bottom();
    $bannerdream=new Banner_Dream();
    $bannerslidemid1=new Banner_Slide_Mid_1();
    $bannerslidemid2=new Banner_Slide_Mid_2();   
    $bannerslidemid3=new Banner_Slide_Mid_3();
    $textmid=new TextMid();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Looping Slideshow with Controls</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" type="text/css" href="..\css\Page.css">
<script type="text/javascript" src="..\js\Page.js" ></script>
</head>

<body>
    <div class="top">
        <div class="slider">
            <div class="menu_top">
                <div class="logo_main">
                    <img src="..\img\Remove-bg.ai_1720144725612.png" class="logo">
                </div>
                <div class="all_menu">
                    <ul class="menu_top_left">
                        <li ><a href="">Track</a></li>
                        <li ><a href="">Ice</a></li>
                        <li ><a href="">Travel</a></li>
                        <li ><a href="">Events</a></li>
                    </ul>
                    <ul class="menu_top_right">
                        <li ><a href="">My Account</a></li>
                        <li ><a href="">Contact</a></li>
                        <li ><a href="">Menu</a></li>
                    </ul>
                </div>
            </div>
            <div class="controls">
                <button class="control_btn" onclick="moveSlides(-1)">
                    <img src="..\img\back.png" class="icon">
                </button>
                <button class="control_btn" onclick="moveSlides(1)">
                    <img src="..\img\next.png" class="icon">
                </button>
            </div>
            <div class="slides">
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 3">
                </div>
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 4">
                </div>
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 5">
                </div>
                <div class="slide">
                    <img src="..\img\slide_top_1.jpg" alt="Slide 6">
                </div>
            </div>
             <?php
                    foreach ($bannertop->getA() as $value) {
                        echo '
                            <div class="text_slide">
                                <p>' . $value["title"] . '<!--Porsche Experience <br> Make it Yours.--></p>
                                <input type="button" name="read" class="read" value="' . $value["button"] . '">
                            </div>
                            '
                        }
                ?>
        </div>
    </div>
    <div class="center">
        <div class="dream">
            <div class="dream_text">
                <p>Your dreams. Our drive.</p>
            </div>
            <div class="dream_row">
                <?php
                    foreach ($bannerdream->getA() as $value) {
                        echo '
                            <div class="dream_row_c">
                                <img src="' . $value["img"] . '" >
                                <div class="overlay_content">
                                    <p>' . $value["title"] . '</p>
                                    <img src="..\img\next_white.png">
                                </div>
                            </div>
                            '
                        }
                    ?>
            </div>
        </div>
        <div class="center_image">
            <img src=<?php echo $bannermid->getBannerMid() ?>>
        </div>
        <div class="center_slide">
            <div class="center_slide_container">
                <div class="ct_controls">
                    <div class="center_text">
                        <p>Begin your experience</p>
                    </div>
                    <button class="control_btn" onclick="moveSlides_js_1(-1)">
                        <img src="..\img\back.png" class="icon ct_icon">
                    </button>
                    <button class="control_btn" onclick="moveSlides_js_1(1)">
                        <img src="..\img\next.png" class="icon ct_icon">
                    </button>
                </div>
                <div class="ct_slides_wrapper">
                    <div class="ct_slides  ct_slide_js_1">
                        <div class="ct_slide ">
                            <img src="../img/center_slide1.jpg" alt="Slide 6">
                        </div>
                        <div class="ct_slide">
                             <?php
                                foreach($bannerslidemid1->getA() as $value) {
                                    echo'
                                        <img src="' . $value["img"] . '" alt="">
                                        <div class="ct_slide_text">
                                            <p>'. $value["title"] . '</p>
                                            <p class="cst">Discover and Learn</p>
                                            <p class="cst cst_mar">' . $value["des"] . '</p>    
                                            <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                        </div>
                                    '}
                                ?>
                        </div>
                        <div class="ct_slide ">
                            <img src="../img/center_slide_2.jpg" alt="Slide 2">
                            <div class="ct_slide_text">
                                <p>Track Experience</p>
                                <p class="cst">Advanced racetrack tuition</p>
                                <p class="cst cst_mar">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>    
                                <input type="button" name="readmore" value="Read More" class="read ctr">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center_slide">
            <div class="center_slide_container">
                <div class="ct_controls">
                    <div class="center_text">
                        <p>Begin your experience</p>
                    </div>
                    <button class="control_btn" onclick="moveSlides_js_2(-1)">
                        <img src="..\img\back.png" class="icon ct_icon">
                    </button>
                    <button class="control_btn" onclick="moveSlides_js_2(1)">
                        <img src="..\img\next.png" class="icon ct_icon">
                    </button>
                </div>
                <div class="ct_slides_wrapper">
                    <div class="ct_slides  ct_slide_js_2">
                        <div class="ct_slide">
                            <?php
                                foreach($bannerslidemid2->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt="">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                         <div class="ct_slide">
                            <?php
                                foreach($bannerslidemid2->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt="">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                         <div class="ct_slide">
                            <?php
                                foreach($bannerslidemid2->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt="">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct_content">
            <div class="ct_content_container">
                <div class="ct_content_text">
                    <div class="content_text">
                        <?php 
                                foreach($textmid->getA() as $value) {
                                    echo'
                                        <div class="content_item" style="font-size: 28px;">'. $value["title"] . '<!--Porsche driving at it’s best – on the racetrack --></div>
                                        <div class="content_item">'. $value["title"] . '<!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--></div>
                                   '}
                         ?>               
                    </div>
                </div>
                 <div class="center_image">
                    <img src=<?php echo $bannerbottom->getBannerBotyom() ?>>
                </div>
            </div>
        </div>
         <div class="center_slide">
            <div class="center_slide_container">
                <div class="ct_controls">
                    <div class="center_text">
                        <p>Begin your experience</p>
                    </div>
                    <button class="control_btn" onclick="moveSlides_js_1(-1)">
                        <img src="..\img\back.png" class="icon ct_icon">
                    </button>
                    <button class="control_btn" onclick="moveSlides_js_1(1)">
                        <img src="..\img\next.png" class="icon ct_icon">
                    </button>
                </div>
//Slide 3
                <div class="ct_slides_wrapper">
                    <div class="ct_slides  ct_slide_js_1">
                        <div class="ct_slide">
                            <?php 
                                foreach($bannerslidemid3->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt=" ">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                        <div class="ct_slide">
                            <?php 
                                foreach($bannerslidemid3->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt=" ">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                        <div class="ct_slide">
                            <?php 
                                foreach($bannerslidemid3->getA() as $value) {
                                    echo'
                                    <img src="' . $value["img"] . '" alt=" ">
                                    <div class="ct_slide_text">
                                        <p>'. $value["title"] . '</p>
                                        <p class="cst">Discover and Learn</p>
                                        <p class="cst cst_mar">' . $value["des"] . '</p>    
                                        <input type="button" name="readmore" value="' . $value["button"] . '" class="read ctr">
                                    </div>
                                '}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_top">
            <div class="footer_top_row">
                <div class="footer_item">
                    <p style="font-size: 32px">Contact</p>
                    <p>Do you have any question ? </p>
                    <input type="button" name="contact" value="Contact Form" class="read footer_contact">
                </div>
                <div class="footer_item">
                    <p style="font-size: 32px">Social Media</p>
                    <p>Get in touch with us on social media</p>
                    <div class="footer_icon">
                        <img src="..\img\facebook.png" >
                        <img src="..\img\instagram.png">
                        <img src="..\img\pinterest-logo.png">
                        <img src="..\img\youtube.png">
                    </div>
                </div>
                <div class="footer_center_row">
                    <div class="footer_center_row_content">
                        <ul>
                            <li class="footer_center_row_content_text">Track</li>
                            <li>Advanced Driver Training</li>
                            <li>Precision</li>
                            <li>Precision Plus</li>
                            <li>Performance</li>
                            <li>Master GT4 RS</li>
                            <li>GT3 Cup</li>
                            <li>Gift Vouchers </li>
                        </ul>
                    </div>
                    <div class="footer_center_row_content">
                        <ul>
                            <li class="footer_center_row_content_text">Ice</li>
                            <li>Ice Experience</li>
                            <li>Ice Force</li>
                            <li>Ice Force Pro</li>
                        </ul>
                    </div>
                    <div class="footer_center_row_content">
                        <ul>
                            <li class="footer_center_row_content_text">Traval</li>
                            <li>Targa Tasmania Tour</li>
                            <li>Targa Great Barrier Reef</li>
                            <li>Targa High Country Tour</li>
                        </ul>
                    </div>
                    <div class="footer_center_row_content">
                        <ul>
                            <li class="footer_center_row_content_text">Events</li>
                            <li>Porsche Pavilion at the Formula 1® Australian Grand Prix 2023</li>
                            <li>Porsche Pavilion</li>
                            <li>Porsche High Flier Grand Prix Experience</li>
                            <li>Porsche in Motion</li>
                            <li>Porsche Golf Cup Australia</li>
                        </ul>
                    </div>
                    <div class="footer_center_row_content">
                        <ul>
                            <li class="footer_center_row_content_text">About</li>
                            <li>Sponsors</li>
                            <li>The Instructors </li>
                            <li>Partnerships</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color: white; " size="1px">
        <div class="footer_bottom">
            <p>Copyright ©2023 Porsche Events. All Rights Reserved. Legal notice. Privacy Policy.</p>
        </div>
         <div class="footer_logo">
                    <img src="..\img\logo.jpg" class="logo">
                </div>
    </div>
<script>
    const slides = document.querySelector('.slides');
    const slideWidth = slides.firstElementChild.clientWidth;
    let slideIndex = 0;

    function moveSlides(direction) {
        if (direction === 1) {
            slideIndex++;
        } else {
            slideIndex--;
        }

        slides.style.transform = `translateX(${-slideIndex * slideWidth}px)`;

        // Nếu đang ở slide cuối cùng, chuyển ngay về slide đầu tiên
        if (slideIndex >= 6) { // Tổng số lượng slide - 1
            slideIndex = 0;
            slides.style.transition = 'none'; // Tắt transition để di chuyển ngay lập tức
            slides.style.transform = `translateX(0)`;
            setTimeout(() => {
                slides.style.transition = 'transform 1s ease'; // Bật lại transition
            }, 100);
        } else if (slideIndex < 0) {
            slideIndex = 5; // Tổng số lượng slide - 1
            slides.style.transition = 'none';
            slides.style.transform = `translateX(${-slideIndex * slideWidth}px)`;
            setTimeout(() => {
                slides.style.transition = 'transform 1s ease';
            }, 100);
        }
    }
    setInterval(() => moveSlides(1), 5000);

    //menu ẩn
    function toggleMenu(event) {
    event.stopPropagation(); // Ngăn chặn sự kiện click lan rộng đến phần tử cha
    const menu = document.getElementById('menu_hiden');
    const container = document.querySelector('.main_menu_hiden');
    if (menu.style.right === '-200px') {
        menu.style.right = '0';
        container.style.overflow = 'auto'; // Hiển thị phần menu khi mở
    } else {
        menu.style.right = '-200px';
        container.style.overflow = 'hidden'; // Ẩn phần menu khi đóng
    }
    }

    function closeMenu() {
        const menu = document.getElementById('menu_hiden');
        const container = document.querySelector('.main_menu_hiden');
        if (menu.style.right === '0px') {
            menu.style.right = '-200px';
            container.style.overflow = 'hidden'; // Ẩn phần menu khi đóng
        }
    }

    // slide center
    let centerSlideIndex = 1; 

    function moveSlides_js_1(n) {
        const slides = document.querySelector('.ct_slide_js_1');
        const totalSlides = slides.children.length;
        const slideWidth = 402;

        centerSlideIndex += n;

        // Transition to clones
        if (centerSlideIndex <= 0) {
            slides.style.transition = 'none';
            centerSlideIndex = totalSlides - 2;
            slides.style.transform = `translateX(${-slideWidth * centerSlideIndex}px)`;
            setTimeout(() => {
                slides.style.transition = 'transform 0.5s ease-in-out';
                centerSlideIndex--;
                slides.style.transform = `translateX(${-slideWidth * centerSlideIndex}px)`;
            }, 50);
        } else if (centerSlideIndex >= totalSlides - 1) {
            slides.style.transition = 'none';
            centerSlideIndex = 1;
            slides.style.transform = `translateX(${-slideWidth * centerSlideIndex}px)`;
            setTimeout(() => {
                slides.style.transition = 'transform 0.5s ease-in-out';
                centerSlideIndex++;
                slides.style.transform = `translateX(${-slideWidth * centerSlideIndex}px)`;
            }, 50);
        } else {
            slides.style.transition = 'transform 0.5s ease-in-out';
            slides.style.transform = `translateX(${-slideWidth * centerSlideIndex}px)`;
        }
    }
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelector('.ct_slide_js_1');
        slides.style.transform = `translateX(${-402 * centerSlideIndex}px)`;
    });
    //



</script>

</body>
</html>
