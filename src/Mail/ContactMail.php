<?php 

namespace App\Mail;
use App\Entity\Contact;
use Twig\Environment;

class ContactMail
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var \Swift_Mailer
     */
    private $renderer;

    public function __construct(\Swift_Mailer $mailer, Environment $renderer){
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }
      
}

