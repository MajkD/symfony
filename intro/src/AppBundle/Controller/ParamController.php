<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParamController extends Controller
{
    /**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction(Request $request, $name)
    {
        # fetch query params
        $person = $request->query->get('name');
        $age = $request->query->get('age');
        $gender = $request->query->get('gender');

        echo $person;
        echo $age;
        echo $gender;

        return $this->render('hello/name.html.twig', [
            'name' => $name,
            'other_name' => 'world',
        ]);
    }
}
