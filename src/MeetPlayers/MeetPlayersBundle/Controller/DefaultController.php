<?php

namespace MeetPlayers\MeetPlayersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MeetPlayersMeetPlayersBundle:MeetPlayers:acceuil.html.twig');
    }
    public function profilAction()
    {
        return $this->render('MeetPlayersMeetPlayersBundle:MeetPlayers:profil.html.twig');
    }
    public function messagesAction()
    {
        return $this->render('MeetPlayersMeetPlayersBundle:MeetPlayers:messages.html.twig');
    }
    public function rechercheAction()
    {
        return $this->render('MeetPlayersMeetPlayersBundle:MeetPlayers:recherche.html.twig');
    }
     public function modifierprofilAction()
    {
        return $this->render('MeetPlayersMeetPlayersBundle:MeetPlayers:modifierprofil.html.twig');
    }
}
