<?php
namespace Nextbrand\ContaoImmoModBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


/**
 * Handles front end routes.
 *
 */
class FrontendController extends Controller
{
    /**
     * Renders the content.
     *
     * @return Response
     *
     */
    public function demoAction()
    {
        $this->get('contao.framework')->initialize();

        return new Response("Hallo Welt");
    }
}
