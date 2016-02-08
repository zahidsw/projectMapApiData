<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // api_map_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'ApiMaps\\ApiMapBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_map_homepage',);
        }

        // api_map_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'ApiMaps\\ApiMapBundle\\Controller\\DefaultController::signupAction',  '_route' => 'api_map_signup',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // get_api_data
        if ($pathinfo === '/getapi') {
            return array (  '_controller' => 'app.get_controller:getapiAction',  '_route' => 'get_api_data',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
