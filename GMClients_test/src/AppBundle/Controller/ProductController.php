<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends Controller
{
    /**
     * @Route("/addproduct", name="addproduct")
     */
    public function addProductAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            $product = $form->getData();
            $clientId = $request->query->get('clientId');
            $product = $product->setClient($clientId);
            // perform some action, such as saving the product to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            $productId = $product->getId();

            return $this->redirectToRoute('addproduct_success', array(
            'productId' => $productId
              ));
        }

        return $this->render('default/product.html.twig', array(
            'form' => $form->createView(),
        ));
     }

     /**
      * @Route("/addproduct_success", name="addproduct_success")
      */
     public function showProductAction(Request $request)
     {
       $productId = $request->query->get('productId');

       if (!$productId) {
           throw $this->createNotFoundException('The product Id was not passed correctly ');
       }

       $product = $this->getDoctrine()
           ->getRepository(Product::class)
           ->find($productId);

       if (!$product) {
           throw $this->createNotFoundException(
               'No product found for id '.$productId
           );
       }

       // ... do something, like pass the $product object into a template
       return $this->render('default/showproduct.html.twig', array(
            'product' => $product,
        ));
     }

}
