<?php

namespace ApiMaps\ApiMapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ApiMapBundle extends Bundle {

    private $transport;

    public function __construct() {
        $this->transport = 'sendmail';
    }

    // ...
}
