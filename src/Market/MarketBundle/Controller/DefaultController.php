<?php

namespace Market\MarketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/market")
     * @Template()
     */
    public function indexAction()
    {
        $name = 'Market Controller';
        return array('name' => $name);
    }
}
