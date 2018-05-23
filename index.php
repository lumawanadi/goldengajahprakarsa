<?php
session_start();
include'./core/koneksi.php';
include './core/routes.php';
$user  = isset($_SESSION['uname']) ? $_SESSION['uname']:'';
$level = isset($_SESSION['level']) ? $_SESSION['level']:'';

// 1 = admin
// 2 = user
if(!empty($url_page)){
    if($url_page=='Slide'){
        $l = array(1);
        $title = "Setup | Slider";
        $url = './app/datamaster/slideAdd.php';
        page($user, $level, $l, $base_url, $url, $title);
    }
    elseif($url_page=='Portofolio'){
        $l = array(1);
        $url =  './app/datamaster/portofolioAdd.php';
        $title = 'Setup | Portofolio';
        page($user, $level, $l, $base_url, $url, $title);
    }
    elseif($url_page=='Profile'){
        $l = array(1);
        $url =  './app/datamaster/profileAdd.php';
        $title = 'Setup | Profile';
        page($user, $level, $l, $base_url, $url, $title);
    }

    elseif($url_page=='Login'){
            $url =  './app/home/login.php';
            $title = 'Login Page | Coretan Emas';
            pgs($base_url,$url,$title);
    }

    elseif($url_page=='Service'){
            $url =  './app/service/service.php';
            $title = 'Service';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='Galerry'){
            $url =  './app/galerry/galerry.php';
            $title = 'Galerry';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='Contact'){
            $url =  './app/home/contact.php';
            $title = 'Contact';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='About'){
            $url =  './app/home/about.php';
            $title = 'About Us';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='GalCoretanEmas'){
            $url =  './app/galery/coretanemas.php';
            $title = 'Galerry Coreta Emas';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='GalUrban'){
            $url =  './app/galery/urban.php';
            $title = 'Galerry Urban';
            pg($base_url,$url,$title);
    }
    elseif($url_page=='GalAnggi'){
            $url =  './app/galery/anggi.php';
            $title = 'Galerry Anggi';
            pg($base_url,$url,$title);
    }
}
else{
    if(!empty($user)){
        $l = array(1);
        $url = './app/home/home.php';
        $title = 'Coretan Emas Architect';
        page($user, $level, $l, $base_url, $url, $title);
    }
    else{
        if($url_page==''){
            include './app/header.php';
            include './app/home/home.php';
            include'./app/footer.php';
        }
    }
}
?>