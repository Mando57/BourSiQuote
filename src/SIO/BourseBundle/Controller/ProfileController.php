<?php

namespace SIO\BourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BourseBundle:Default:index.html.twig', array('name' => $name));
    }
}
