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
     * @Route("/luckynumber", name="lucky_number")
     */
    public function LuckyController()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig',['number' => $number]);
    }

    /**
     * @Route("lucky/number/{max}", name = "lucky_max")
     */
    public function maxNumberAction($max)
    {
        $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', ['number' => $number]);
    }

    /**
     * @Route("/", name = "homepage")
     */
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/{slug}", name = "podstrona")
     */
    public function urlAction($slug)
    {
        //return $this->redirectToRoute('homepage');
        //return $this->redirectToRoute('homepage', [], 301);
        //return $this->redirectToRoute('lucky_max', ['max' => 10]);
        //$templating = $this->get('templating');
        //$router = $this->get('router');
        //$mailer = $this->get('mailer');
        
        return $this->render('default/page.html.twig', [
            'slug' => $slug]);
    }
}