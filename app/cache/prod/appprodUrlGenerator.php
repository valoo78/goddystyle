<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'GDS_photo' => true,
       'GDS_home' => true,
       'GDS_film' => true,
       'GDS_party' => true,
       'GDSOrderBundle_listeResto' => true,
       'GDSOrderBundle_menu' => true,
       'GDSOrderBundle_recap' => true,
       'GDSOrderBundle_confirm' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getGDS_photoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\PhotoBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/photo/',  ),));
    }

    private function getGDS_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getGDS_filmRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::filmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/film/',  ),));
    }

    private function getGDS_partyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::partyAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/party/',  ),));
    }

    private function getGDSOrderBundle_listeRestoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/order/',  ),));
    }

    private function getGDSOrderBundle_menuRouteInfo()
    {
        return array(array (  0 => 'resto',), array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::menuAction',), array (  'resto' => 'mcdo|subway',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => 'mcdo|subway',    3 => 'resto',  ),  1 =>   array (    0 => 'text',    1 => '/order/menu',  ),));
    }

    private function getGDSOrderBundle_recapRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::recapAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/order/recap',  ),));
    }

    private function getGDSOrderBundle_confirmRouteInfo()
    {
        return array(array (), array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::confirmAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/order/confirm',  ),));
    }
}
