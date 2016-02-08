<?php

namespace ApiMaps\ApiMapBundle\Controller;

use ApiMaps\ApiMapBundle\Models\ApiAccess;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DependencyInjection\SimpleXMLElement;
use Symfony\Component\HttpFoundation\Response;
use ApiMaps\ApiMapBundle\Entity\Mappaths;
use ApiMaps\ApiMapBundle\Entity\Traveltime;

class GetApiController extends Controller {

    public function getapiAction() {
        // $api_obj;
        $apiAccess = new ApiAccess();

        $em = $this->getDoctrine()->getManager();
        $counter_rows = $em->createQueryBuilder();
        $counter_rows->select('paths.id');
        $counter_rows->from('ApiMapBundle:Mappaths', 'paths');
        $count = $counter_rows->getQuery()->getResult();
        //  echo $count[0]['id'];
        //    echo count($count);

        foreach ($count as $c)
            foreach ($c as $cn) {
        //        echo("$cn");
            //    $cn = 5;
                echo('<br>');
                $qb = $em->createQueryBuilder();
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
/*
                $qb = $em->createQueryBuilder();
                $query1 = $qb->select('u.id', 'u.unitid')
                        ->from('ApiMapBundle:Mappaths', 'm')
                        ->join('ApiMapBundle:Unitids', 'u', 'WITH', $qb->expr()->orX($qb->expr()->eq('IDENTITY(m.refUnitids2)', 'u.id'), $qb->expr()->eq('IDENTITY(m.refUnitids1)', 'u.id')))
                        ->where('m.id=:tt')
                        //  ->join ('ApiMapBundle:Unitids', 'u')
                        ->setParameter('tt', $cn)
                        ->getQuery()
                        ->getResult();

                $qb = $em->createQueryBuilder();
                $query2 = $qb->select('IDENTITY(m.refUnitids2)', 'IDENTITY(m.refUnitids1)')
                        ->from('ApiMapBundle:Mappaths', 'm')
                        //   ->from('ApiMapBundle:Unitids', 'u')
                        //->join ('ApiMapBundle:Unitids', 'u', 'WITH','ApiMapBundle:Mappaths', 'm')
                        // ->leftjoin('ApiMapBundle:Unitids', 'u', 'WITH', $qb->expr()->orX($qb->expr()->eq('m.refUnitids2', 'u.id'), $qb->expr()->eq('m.refUnitids1', 'u.id')))
                        ->where('m.id=:tt')
                        //  ->join ('ApiMapBundle:Unitids', 'u')
                        ->setParameter('tt', $cn)
                        ->getQuery()
                        ->getResult();
*/
                $qb = $em->createQueryBuilder();
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

                $em = $this->getDoctrine()->getManager();
                $reposity = $em->getRepository('ApiMapBundle:Mappaths');
                $pathid = $reposity->find($cn);

                $traveltimeobj = new Traveltime();
                $traveltimeobj->setNoobjs($matches);
                $traveltimeobj->setOndate(new \DateTime($date1));
                $traveltimeobj->setRefMapPath($pathid);
                $traveltimeobj->setTraveltime($travel);

                $em = $this->getDoctrine()->getManager();

                $em->persist($traveltimeobj);
                $em->flush();
 
                //         echo $locA, '  ', $locB, '  ', $date1;
            }
        return new Response();
    }

}
