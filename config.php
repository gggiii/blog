<?php
    //HTTPS REROUTE
    if(!is_https()){
        //header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    }

    //BASE URL SETUP
    define('IP',$_SERVER['REMOTE_ADDR']);
    if(IP == '127.0.0.1' or IP == '::1'){
        define('LOCALHOST', true);
    }else{
        define('LOCALHOST', false);
    }
    if(LOCALHOST){
        define('ROOT_URL', 'http://'.$_SERVER['HTTP_HOST']."/blog/");
    }else{
        define('ROOT_URL', 'http://'.$_SERVER['HTTP_HOST']."/blog/");
    }

    //CHECK IF COONECTION IS HTTPS
    function is_https(){
        if(isset($_SERVER['HTTPS']) and !empty($_SERVER['HTTPS']) and $_SERVER['HTTPS'] != 'off')
            return true;
        else
            return false;
    }


    //TEMPLATE
    define('PAGE_404','404.php');
    define('PAGE_TEMPLATES_DIR','template/pages/');

    //DATABASE CREDENTIALS
    define('DB_HOST','mariadb103.websupport.sk');
    define('DB_PORT','3313');
    define('DB_USERNAME','dummyblog');
    define('DB_PASSWORD','Sc0-2}dWSJ');
    define('DB_DATABASE', 'dummyblog');

?>