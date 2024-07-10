<?php 
  namespace AD\control;
  use AD\model\home;

class HomeControl{
    public function home(){
        require_once "./view/homepage.php";
    }

    public function admin(){
        require_once "./View_Ad/Ad.php";
    }

    public function BannerTop(){
        require_once "./View_Ad/Banner_Top.php";
    }

    public function BannerMid(){
        require_once "./View_Ad/Banner_Mid.php";
    }

    public function BannerBottom(){
        require_once "./View_Ad/Banner_Bottom.php";
    }
    public function BannerDream(){
        require_once "./View_Ad/Banner_Dream.php.php";
    }
    
    public function processingBannerMid(){
        echo "this is the processing banner mid";
    }
    public function processingBannerBot(){
        echo "this is the processing banner bot";
    }
    public function Banner_Slide_Mid_1(){
        require_once "./View_Ad/Banner_Slide_Mid_1.php";
    }

    public function Banner_Slide_Mid_2(){
        require_once "./View_Ad/Banner_Slide_Mid_2.php";
    }
    public function Banner_Slide_Mid_3(){
        require_once "./View_Ad/Banner_Slide_Mid_3.php";
    }
    public function processingBannerDream(){
        require_once "./View_Ad/Banner_Dream_Update.php";
    }
    public function processingBannerSlideMid1Update(){
        require_once "./View_Ad/Banner_Slide_Mid_2_Update.php";
    }
    public function processingBannerSlideMid2Update(){
        require_once "./View_Ad/Banner_Slide_Mid_2_Update.php";
    }
    public function processingBannerSlideMid3Update(){
        require_once "./View_Ad/Banner_Slide_Mid_3_Update.php";
    }

    

}

?>
