<?php

use Yee\Managers\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route('/home')
     * @Name('home.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        $name = "Home";

        $data = array();

        $app->render('pages/home.tpl', $data );
    }

}