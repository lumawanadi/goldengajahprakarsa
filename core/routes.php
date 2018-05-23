<?php
function page($uname,$level,$l,$base_url,$url,$title){
    if(!empty($uname)){
        if(in_array($level,$l)){
            include './app/header.php';
            include ''.$url;
            include './app/footer.php';
        }else{
            echo'<script>document.location.href="'.$base_url.'"</script>';
        }
    }else{
        echo'<script>document.location.href="'.$base_url.'"</script>';
    }
}
function pg($base_url, $url, $title){
    if((empty($uname)) && (empty($level))){
            include './app/header.php';
            include ''.$url;
            include './app/footer.php';
        }
}
function pgs($base_url, $url, $title){
    if((empty($uname)) && (empty($level))){           
            include ''.$url;
        }
}
?>