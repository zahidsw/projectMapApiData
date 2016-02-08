<?php
namespace ApiMaps\ApiMapBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use ApiMaps\ApiMapBundle\ApiMapServices\ApiMapService;
//use dino_container\GetApi;
use AppBundle\Newsletter;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of command
 *
 * @author mos
 */
class GetApiCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName("cron:getapi")
            ->setDescription('Greet someone')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
     //$command = $this->getApplication()->find('cron:getapi');
    // $controller = $this->getContainer()->get('app.get_controller');
          $name = $input->getArgument('name');
        
        $number = $this->getContainer()->get('app.test');
       //  $number->sum(12,13);
    //  $controller = $this->getContainer('app.get_controller');
    // $controller->getapiAction();
     //$getapicontroller =new \ApiMaps\ApiMapBundle\Controller\GetApiController(); 
    // $this->container->has('app.get_controller');
      
     // $input = $this->getContainer()->get("$getapicontroller->forward('app.get_controller:getapiAction')");
    //  global $kernel;
    
  //  $assetsManager = $getapicontroller->getContainer()->get('app.get_controller:getapiAction');‏
    // $output = $command->run($input, $output);
   // $getapicontroller->getapiAction();
    
   //  $this->forward('app.get_controller:getapiAction');
        
   /*     $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }
*/
     //   $output->writeln($text);
    }
}

