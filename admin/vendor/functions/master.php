<?php
define("BASE_PATH", "localhost");

function getPage(){
    $response        = new stdClass;
    $response->title = 'Dashboard';

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }else{
        $action = 'index';
    }

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'dashboard';
    }

    $response->view   = getView($page,$action);
    $response->assets = getAssets($page,$action);

    return $response;
};

function getAssets($name,$action){

    include('config/assets/'.$name.'/'.$action.'.php');

    return $config;

};

function getView($name,$action){

    $view = 'views/page/'.$name.'/'.$action.'.php';

    return $view;
};


function url(){
  return BASE_PATH.'/admin/';
}
?>