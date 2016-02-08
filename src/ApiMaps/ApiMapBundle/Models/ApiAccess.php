<?php

namespace ApiMaps\ApiMapBundle\Models;
//use Doctrine\ORM\EntityRepository;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of ApiAccess
 *
 * @author mos
 */
class ApiAccess{
    
private $api_value;
private $curl;
private $curl_post_data;
private $curl_response;
private $xml;

//var $Last_Time = [32];
// calling a api values and return the xml format 

public function calling() {
    
     $em = $this->getDoctrine()->getManager();
      $counter_rows = $em->createQueryBuilder();
      $counter_rows->select('count(paths.id)');
      $counter_rows->from('ApiMapBundle:Mappaths','paths');
      $count = $counter_rows->getQuery()->getSingleScalarResult();    
      return $count;
      
 }
function calling_api($station_a, $station_b) {

    $this->api_value = 'http://bb8.bluetrace.eu/hotspots/traveltime?api_key=811d954cc4e26eba9e6b8b413cd473&location_a=' . $station_a . '&location_b=' . $station_b;

return $this->api_value;
}

function parsing_api($api_value) {

$this->curl = curl_init($api_value);
$this->curl_post_data = array(
"user_id" => 42,
 "emailaddress" => 'lorna@example.com',
);
curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($this->curl, CURLOPT_POST, true);
curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->curl_post_data);
$this->curl_response = curl_exec($this->curl);
$this->xml = new SimpleXMLElement($this->curl_response);
curl_close($this->curl);
return $this->xml;
}

//.................  end of the parsing_api function
// Take $num articles of $artnr out of the cart
}

