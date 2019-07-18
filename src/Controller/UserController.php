<?php
// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="create_user")
     */
    public function createUser(ValidatorInterface $validator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User();
        $user->setFname('a');
        $user->setLname('aa');
        $user->setEmail('a@gmail.com');
        $user->setNickname('A');
        $user->setPass('123456');

        $errors = $validator->validate($user);
        if (count($errors) > 0) { 
           return new Response( 
               (string) $errors, 
               417, 
               [
                   'content-type' => 'application/json' 
                ]
            );
        }

        // mounts to Doctrine
        $entityManager->persist($user);

        //Execute queries
        $entityManager->flush();
      
    //   [
    //         'controller_name' => 'UserController',
    //         'first_name' => $user->getFname(),
    //         'last_name' => $user->getLname(),
    //         'email' => $user->getEmail(),
    //         'nick_name' => $user->getNickname(),
    //     ]

        $res = new Response($user);

        return $this->render('user/index.html.twig', $res);
    }
}
