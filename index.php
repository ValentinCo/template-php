<?php 
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}
ob_start();
if($p === 'home'){
    include('./pages/home.php');
}
if($p === 'annonceurs'){
    include('./pages/annonceurs.php');
}
if($p === 'annonces'){
    include('./pages/annonces.php');
}
if($p === 'rubriques'){
    include('./pages/rubriques.php');
}
$content = ob_get_clean();
include('./pages/template/default.php');
?>