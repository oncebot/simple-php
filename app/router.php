<?php
function route(){
    $notfound = '404';
    $home = 'home';
    if(isset($_GET['page'])){
        $page = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['page']);
        if(!empty($page)){
            return file_exists('./views/'.$page.'.php')?$page:$notfound;        
        }else{
            return $home;
        }
    }
    return $home;
}
$page = route();
if($page){
    require('./views/'.$page.'.php');
}
?>
