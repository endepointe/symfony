<?php
// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializers = new Serializer($normailzers, $encoders);

        $errors = $validator->validate($user);
        if (count($errors) > 0) { 
           return new Response( 
               (string) $errors, 400);
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
        // instead of sending as text, serialize the 
        // content-type and send as an app/json file

        //$res = new Response($user, Response::HTTP_OK, ['content-type' => 'text/html']);

        return new Response("Created user:"." ".$user);
    }
}
