<?php

namespace HelloSympony\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HelloSymponyHelloBundle:Default:index.html.twig');
    }
}
