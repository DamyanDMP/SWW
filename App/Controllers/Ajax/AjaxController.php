<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Librarie\emailTemplate\emailTemplate;

class AjaxController extends Controller
{
    /**
     * @Route('/send')
     * @Name('send.index')
     */
    public function sendAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $data = array();
        $mailer = new emailTemplate("damyan.pazvanski@gmail.com", "damyan.pazvanski@gmail.com", "signup", $data, "Acticate Account");
        $mailer->buildEmail();
        $mailer->sendEmail();

        echo "Sended!";
    }

}