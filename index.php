<?php

session_start();
require_once('config.php');
require_once 'vendor/autoload.php';
require_once('db.php');
require_once('smarty3/Smarty.class.php');

$app = new \Slim\Slim();

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

$app->get('/aboutus', function () use ($app, $smarty) {
	$smarty->display('aboutus.tpl');
});

$app->get('/faq', function () use ($app, $smarty) {
	$smarty->display('faq.tpl');
});

$app->get('/privacy', function () use ($app, $smarty) {
	$smarty->display('privacy.tpl');
});

$app->get('/terms', function () use ($app, $smarty) {
	$smarty->display('terms.tpl');
});

$app->get('/video', function () use ($app, $smarty) {
	$smarty->display('video.tpl');
});


$app->get('/index2', function () use ($app, $smarty) {
	$smarty->display('index2.tpl');
});

$app->get('/login', function () use ($app, $smarty) {
	$smarty->display('login.tpl');
});

$app->get('/', function () use ($app, $smarty) {
	$smarty->display('index.tpl');
});

$app->notFound(function () use ($app) {
	$app->redirect(APP_PATH . "/");
});

$app->run();