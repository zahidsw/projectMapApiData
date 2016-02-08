<?php

namespace dino_container\Roar;
//use dino_container\GetApi;
//include('GetApi.php');
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
require __DIR__ . '../../vendor/autoload.php';

$test = new GetApi\GetApi();

$this->get('getapi')->sum(12,13);
$logger = new Logger('main');
$container = new ContainerBuilder();
$streamHandler = new StreamHandler(__DIR__ . '/dino.log');
$container->set('logger.stream_handler', $streamHandler);
$container->set('logger.stream_handler', $streamHandler);
$logger = new Logger('main', array($container->get('logger.stream_handler')));

//$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
//$loader->load('services.yml');
$newsletterManager = $container->get('app.get_controller:getapiAction()');

//global $kernel;
//$assetsManager = $kernel->getContainer()->get('app.get_controller');
//$this->get('app.get_controller:getapiAction');

$container->set('logger', $logger);
runApp($container);

//require_once __DIR__ . '/composer' . '/autoload.php';

function runApp(ContainerBuilder $container) {
    $container->get('logger')->info('ROOOOR');
}
