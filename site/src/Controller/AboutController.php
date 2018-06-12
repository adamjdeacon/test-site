<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends Controller {

    /**
     * 
     * @Route("/about")
     */
    public function number() {
        $number = random_int(0, 100);
        return $this->render('about/index.html.twig', [
                    'number'            => $number,
                    'controller_name'   => "Bob",
        ]);
    }

}
