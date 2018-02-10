<?php

namespace EKBundle\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/{_locale}")
     */
    public function indexAction(Request $request)
    {
	    return $this->render('EKBundle:Home:index.html.twig', array(
		    'lang'   => (string)$request->getLocale(),
	    ));
    }
}
