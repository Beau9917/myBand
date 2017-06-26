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

$action = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($action) {
    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'articles':
        //get articles from the model
        require 'model/getarticles.php';
        $templateParser->assign('result_list',$result_list);

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
}

// footer
$templateParser->display('footer.tpl');

?>