<?php

namespace App\Controller;
use App\Form\ContactType;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\BrowserKit\Response;

class ContactController extends AbstractController
{
     /**
     * @Route("/{contact/mes", name="contact_mes")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request)
    {
        $contact = new Contact();
        $form = $this-> createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $m = $this->getDoctrine()->getManager();
            $m->persist(($contact));
            $m->flush();

            return $this ->redirectToRoute('home');
        }
        return $this ->render('contact/mes.html.twig', [
            "form" => $form->createView()
        ]);
    }
}

?>