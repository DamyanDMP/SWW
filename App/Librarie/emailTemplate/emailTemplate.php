<?php
namespace App\Librarie\emailTemplate;

class emailTemplate {
    private $sender, $receiver, $template, $date, $htmlmessage, $subject;
    public function __construct($sender, $receiver, $template, $date, $subject)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->template = $template;
        $this->date = $date;
        $this->subject = $subject;
    }

    public function buildEmail(){
        $app = \Yee\Yee::getInstance();
        $app->view()->appendData($this->date);
        $this->htmlmessage = $app->view()->render('mial/'.$this->template.'.tpl');

        return $this;
    }
    public function sendEmail(){
        $headers = "MIME-VERSION: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <" . $this->sender . ">" . "\r\n";
        $headers .= "Cc: myboss@example.com" . "\r\n";
        
        mail($this->receiver, $this->subject, $this->htmlmessage, $headers);
    }

}