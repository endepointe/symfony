<?php
// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="create_user")
     */
    public function createUser(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setFname('a');
        $user->setLname('aa');
        $user->setEmail('a@gmail.com');
        $user->setNickname('A');
        $user->setPass('123456');

        // mounts to Doctrine
        $entityManager->persist($user);

        //Execute queries
        $entityManager->flush();
      
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'first_name' => $user->getFname(),
            'last_name' => $user->getLname(),
            'email' => $user->getEmail(),
            'nick_name' => $user->getNickname(),
        ]);
    }
}
