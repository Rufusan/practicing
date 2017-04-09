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
     * @Route("/lucky/number")
     */
    public function LuckyController()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    /**
     * @Route("lucky/number/{max}")
     */
    public function maxNumberAction($max)
    {
        $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}