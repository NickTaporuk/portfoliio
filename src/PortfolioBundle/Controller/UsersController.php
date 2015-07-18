<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;

class UsersController extends Controller
{
    /**
     * @return array
     * @View()
     */
    public function getUsersAction(){
        $users = $this->getDoctrine()->getRepository('PortfolioBundle:User')
        ->findAll();

        return ['users' => $users];
    }
}