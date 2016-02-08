<?php

namespace ApiMaps\ApiMapBundle\ApiMapService;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Symfony\Component\HttpFoundation\Response;
use ApiMaps\ApiMapBundle\Entity\Mappaths;
use ApiMaps\ApiMapBundle\Entity\Traveltime;
use Doctrine\ORM\EntityManager;

class ApiMapService {

    private $transport;

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->transport = 'sendmail';
        $this->em = $em;
        // $api_obj;
        //   $apiAccess = new ApiAccess();
        //$em = $this->getDoctrine()->getManager();
        // $em=$this->container->get('doctrine')->getManager();
        $counter_rows = $this->em->createQueryBuilder();
        $counter_rows->select('paths.id');
        $counter_rows->from('ApiMapBundle:Mappaths', 'paths');
        $count = $counter_rows->getQuery()->getResult();

        foreach ($count as $c)
            foreach ($c as $cn) {
                //        echo("$cn");
                //    $cn = 5;
                echo('<br>');
                $qb = $this->em->createQueryBuilder();
                $query = $qb->setParameter('tt', $cn);
                $query = $qb->select('u1.id', 'u1.unitid')
                        ->from('ApiMapBundle:Mappaths', 'm1')
                        // ->from('ApiMapBundle:Unitids', 'u11')
                        ->join('ApiMapBundle:Unitids', 'u1', 'WITH', $qb->expr()->orX('m1.refUnitids2 =u1.id', 'm1.refUnitids1 = u1.id'))
                        ->andWhere('m1.id=:tt')
                        //->andWhere('u1.id=m1.refUnitids2')
                        //->andWhere('u1.id=m1.refUnitids1')
                        ->setParameter('tt', $cn)
                        ->getQuery()
                        ->getResult();
        
                $qb = $this->em->createQueryBuilder();
                $query3 = $qb->select('IDENTITY(m.refUnitids2)', 'IDENTITY(m.refUnitids1)')
                        ->from('ApiMapBundle:Mappaths', 'm')
                        // ->addSelect($query1)
                        ->where('m.id=:tt')
                        ->setParameter('tt', $cn)
                        ->getQuery()
                        ->getResult();
                        
      //          echo $query3[0][1], '  ', $query3[0][2];
      //          echo '<br>';
                
                if ($query3[0][1] == $query[0]['id']) {
                    
      //              echo('equal');
                    
                    $arr=array($query3[0][1],$query[0]['unitid'],$query3[0][2],$query[1]['unitid']);
                } else {
                         $arr=array($query[1]['id'],$query[1]['unitid'],$query[0]['id'],$query[0]['unitid']);
      //                   echo('not equal');
                }
      /*          echo '<br>';
                echo $query[0]['id'], '  ', $query[1]['id'];
                echo '<br>';
                echo $query[0]['unitid'], '  ', $query[1]['unitid'];
                 echo '<br>';               

                echo $arr[0], ' ', $arr[1], ' ', $arr[2], ' ', $arr[3];
                echo '<br>';
        */  
                $api_value = 'http://bb8.bluetrace.eu/hotspots/traveltime?api_key=811d954cc4e26eba9e6b8b413cd473&location_a=' . $arr[1] . '&location_b=' . $arr[3];

                $curl = curl_init($api_value);
                $curl_post_data = array(
                    "user_id" => 42,
                    "emailaddress" => 'lorna@example.com',
                );
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
                $curl_response = curl_exec($curl);
                $xml = new SimpleXMLElement($curl_response);
                curl_close($curl);
                //      print_r("<br>");
                $date1 = ($xml->DateData);
                $locA = (intval($xml->LocationA));
                $locB = (intval($xml->LocationB));
                $travel = (intval($xml->TravelTime));
                $matches = (intval($xml->Matches));

             //   $em = $this->getDoctrine()->getManager();
                $reposity = $this->em->getRepository('ApiMapBundle:Mappaths');
                $pathid = $reposity->find($cn);

                $traveltimeobj = new Traveltime();
                $traveltimeobj->setNoobjs($matches);
                $traveltimeobj->setOndate(new \DateTime($date1));
                $traveltimeobj->setRefMapPath($pathid);
                $traveltimeobj->setTraveltime($travel);

            //    $em = $this->getDoctrine()->getManager();

                $this->em->persist($traveltimeobj);
                $this->em->flush();
 
                //         echo $locA, '  ', $locB, '  ', $date1;
            }
       // return new Response();
        // ...
    }
}
    