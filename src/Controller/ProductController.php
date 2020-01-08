<?php
/**
 * Created by PhpStorm.
 * User: ALEXANDER
 * Date: 08.01.2020
 * Time: 21:02
 */

namespace App\Controller;


use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ProductController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/", name="mainpage")
     */
    public function main()
    {
        $products = $this->em->getRepository(Product::class)->findAll();
        return $this->render('product/list.html.twig', ['products' => $products]);
    }

    /**
     * @Route("/product/{id}", name="product_card", requirements={"id"="\d+"})
     */
    public function card($id)
    {
        $product = $this->em->getRepository(Product::class)->find($id);
        return $this->render('product/card.html.twig', ['product' => $product]);
    }
}