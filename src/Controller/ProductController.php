<?php
// src/Controller/ProductController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="create_product")
     */
    public function createProduct(ValidatorInterface $validator): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('ProductName');
        $product->setPrice(123);

        $errors = $validator->validate($product);
        if (count($errors) > 0) {
            return new Response((string) $erros, 400);
        }

        $entityManager->persist($product);

        $entityManager->flush();
        
        return new Response('Saved a new product with ID: '.$product->getId());
    }

    public function show($id) 
    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException(
                `No product found for id: ${id}`
            );
        }
        return new Response("Product:". $product->getName());
    }
}
