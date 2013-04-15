<?php
namespace Sample\Endpoints;

use Lcobucci\ActionMapper2\Routing\Annotation\Route;
use Lcobucci\ActionMapper2\Routing\Controller;

/**
 * This is just a sample class to show how to use classes as endpoints
 *
 * @author Luís Otávio Cobucci Oblonczyk
 */
class Hello extends Controller
{
    /**
     * This method will be called on requests to the path "/*" (* = anything different of "testing")
     *
     * @Route("/(name)")
     */
    public function hello($name)
    {
        return sprintf('Hello %s!', urldecode($name));
    }

    /**
     * This method will be called on requests to the path "/"
     *
     * @Route("/")
     */
    public function helloWorld()
    {
        return $this->hello('world');
    }
}
