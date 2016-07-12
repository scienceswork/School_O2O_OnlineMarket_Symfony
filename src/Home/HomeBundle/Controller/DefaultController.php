<?php

namespace Home\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $name = 'Hello world';
        // 配置渲染目录,模版:src/Home/Resources/views/Home/index.html.twig
        return $this->render("HomeHomeBundle:Home:index.html.twig",
            array("name" => $name));
    }

    /**
     * @Route("/test")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function testAction()
    {
        return $this->render("HomeHomeBundle:Home:test.html.twig");
    }
}
