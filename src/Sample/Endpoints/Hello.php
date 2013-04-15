<?php
namespace Sample\Endpoints;

use Lcobucci\ActionMapper2\Routing\Annotation\Route;
use Lcobucci\ActionMapper2\Routing\Controller;

class Hello extends Controller
{
    /**
     * @Route("/(name)")
     */
    public function hello($name)
    {
        return sprintf('Hello %s!', urldecode($name));
    }

    /**
     * @Route("/")
     */
    public function helloWorld()
    {
        return $this->hello('world');
    }
}
