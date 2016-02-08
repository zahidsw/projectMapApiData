<?php
namespace ApiMaps\ApiMapBundle\Service;

//require __DIR__.'/vendor/autoload.php';
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use ApiMaps\ApiMapBundle\Controller\GetApiController;
use Doctrine\ORM\EntityManager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of GetApi
 *
 * @author mos
 */
 class GetApi11 {
    //put your code here
    public function __construct() {
        $container = new ContainerBuilder();
     //   $loader = new YamlFileLoader($container, new FileLocator(__DIR__));
      //  $loader->load('services.yml');
     //   $newsletterManager = $container->get('app.get_controller');
    
       // $container->register('mailer', 'Mailer');
        //public function get($serviceName) 
        //              { if ($this->container->has($serviceName)) { return $this->container->get(serviceName); } else {return null; } }
        //   $qb = $this->getDoctrine()->createQueryBuilder();
        //   $in = $this->getEntityManager()->getRepository('Custom:MembreService');       
        //   $container->set('logger.stream_handler','app.get_controller');
        //   $loggerDefinition = new DependencyInjection\Definition('app.get_controller');
        //   $loggerDefinition->setArguments(array('main',array(new DependencyInjection\Reference('app.get_controller'))       
        //   ));
        //   $container->setDefinition('logger', $loggerDefinition);    
        //   $container->get('logger');
        //   $session = $this->get('app.get_controller');
        //   $container->register('mailer', 'app.get_controller');
        //   $container->set('logger.stream_handler',$streamHandler);
    }
    public function sum($n1, $n2) {
            return $n1 + $n2;
        }


}
