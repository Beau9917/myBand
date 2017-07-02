<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle',$title);
$templateParser->display('head.tpl');

// header
$templateParser->display('header.tpl');

// menu
$templateParser->display('menu.tpl');

$action = isset($_GET['url']) ? $_GET['url'] : 'home';

switch ($action) {
    case 'home':
        require 'model/gethome.php';
        $templateParser->assign('result_list',$result_list);
        $templateParser->display('home.tpl');
        break;
    case 'articles':
        //get articles from the model
//        require 'model/getarticles.php';
//        $templateParser->assign('result_list',$result_list);
//        $templateParser->display('articles.tpl');
        include 'model/get_pagination.php';
        $templateParser->assign('page',$page);
        include 'model/get_data.php';
        $templateParser->assign('number_of_pages',$number_of_pages);
        $templateParser->assign('result',$result);
        $templateParser->display('articles.tpl');

        break;
    case 'about':
        //use 'display' to show a template
        require_once 'model/getabout.php';
        $templateParser->assign('about_list', $result_list);
        $templateParser->display('about.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;
    case 'login':
        //use 'display' to show a template
        require_once 'model/inlogpoort.php';
        $templateParser->display('login.tpl');
        break;
}

// footer
$templateParser->display('footer.tpl');

?>