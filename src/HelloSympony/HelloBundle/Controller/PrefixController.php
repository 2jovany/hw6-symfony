<?php

namespace HelloSympony\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PrefixController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function gogogoAction()
    {
    	return new Response(
    	    'Prefix? What Prefix?!'
	    );
    }
}
