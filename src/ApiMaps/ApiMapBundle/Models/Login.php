<?php
namespace ApiMaps\ApiMapBundle\Models;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of login
 *
 * @author mos
 */
class Login {
    //put your code here
    private $username;
    private $passward;


function setUsername($username) {
    $this->username = $username;
}

 function setPassward($passward) {
    $this->passward = $passward;
}



function getUsername() {
    return $this->username;
}

 function getPassward() {
    return $this->passward;
}

}
