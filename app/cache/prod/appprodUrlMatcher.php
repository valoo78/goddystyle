<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // GDS_photo
        if (rtrim($pathinfo, '/') === '/photo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GDS_photo');
            }
            return array (  '_controller' => 'GDS\\PhotoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'GDS_photo',);
        }

        // GDS_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GDS_home');
            }
            return array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'GDS_home',);
        }

        // GDS_film
        if (rtrim($pathinfo, '/') === '/film') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GDS_film');
            }
            return array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::filmAction',  '_route' => 'GDS_film',);
        }

        // GDS_party
        if (rtrim($pathinfo, '/') === '/party') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'GDS_party');
            }
            return array (  '_controller' => 'GDS\\HomeBundle\\Controller\\DefaultController::partyAction',  '_route' => 'GDS_party',);
        }

        if (0 === strpos($pathinfo, '/order')) {
            // GDSOrderBundle_listeResto
            if (rtrim($pathinfo, '/') === '/order') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'GDSOrderBundle_listeResto');
                }
                return array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::indexAction',  '_route' => 'GDSOrderBundle_listeResto',);
            }

            // GDSOrderBundle_menu
            if (0 === strpos($pathinfo, '/order/menu') && preg_match('#^/order/menu/(?P<resto>mcdo|subway)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::menuAction',)), array('_route' => 'GDSOrderBundle_menu'));
            }

            // GDSOrderBundle_recap
            if ($pathinfo === '/order/recap') {
                return array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::recapAction',  '_route' => 'GDSOrderBundle_recap',);
            }

            // GDSOrderBundle_confirm
            if ($pathinfo === '/order/confirm') {
                return array (  '_controller' => 'GDS\\OrderBundle\\Controller\\OrderController::confirmAction',  '_route' => 'GDSOrderBundle_confirm',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
