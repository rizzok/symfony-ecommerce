<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route(
     *     "/hello/{name<\d+>}",
     *     name="hello",
     *     methods={"GET", "POST"}
     * )
     */
    public function helloWorld($name = "World")
    {
        return new Response("Hello $name !");
    }
}
