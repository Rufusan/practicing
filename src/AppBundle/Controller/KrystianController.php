<?php
/**
 * Created by PhpStorm.
 * User: Krystian
 * Date: 2017-04-08
 * Time: 20:02
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class KrystianController extends Controller
{
    /**
     * @Route("/")
     */
    public function showAction()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/{someName}")
     */
    public function pageAction($someName)
    {
        return $this->render('default/show.html.twig', [
            'name' => $someName
        ]);

    }
}