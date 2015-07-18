<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter;

class UserRestController extends Controller
{
    /**
     * @param $username
     * @View()
     * @return mixed
     */
    public function getUserAction($username){
        $user = $this->getDoctrine()->getRepository('PortfolioBundle:User')->findOneByUsername($username);
        if(!is_object($user)){
            throw $this->createNotFoundException();
        }
        return $user;
    }
    /**
     * @param $username
     * @View()
     * @return mixed
     */
    public function postUserAction($username){
        $user = $this->getDoctrine()->getRepository('PortfolioBundle:User')->findOneByUsername($username);
        if(!is_object($user)){
            throw $this->createNotFoundException();
        }
        return $user;
    }

    /**
     * @param User $user
     * @View()
     * @return array
     */
    public function getUsersAction(){
        $users = $this->getDoctrine()->getRepository('PortfolioBundle:User')
            ->findAll();

        return ['users' => $users];
    }

    /**
     * @param User $user
     * @View()
     * @return array
     */
    public function postUsersAction(){
        $users = $this->getDoctrine()->getRepository('PortfolioBundle:User')
            ->findAll();

        return ['users' => $users];
    }
}