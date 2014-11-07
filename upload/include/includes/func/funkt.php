<?php
#   Copyright by: FeTTsack
#   Support: www.fettsack.de.vc


//facebook like button ...
function get_like_button($url){
    global $allgAr;
    if($allgAr['fb_active'] == 0){
        return('');
    }else{
        $fb_send = 'true';
        $fb_width = $allgAr['fb_width'];
        $fb_faces = 'true';
        if($allgAr['fb_send'] == 0){
            $fb_send = 'false';
        }
        if($allgAr['fb_faces'] == 0){
            $fb_faces = 'false';
        }
        $like_button = '<div class="fb-like" data-href="http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/index.php?'.$url.'" data-send="'.$fb_send.'" data-width="'.$fb_width.'" data-show-faces="'.$fb_faces.'"></div>';
        return($like_button);
    }
}

?>