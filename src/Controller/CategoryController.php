<?php
// App/src/Controller/CategoryController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;

class CategoryController extends AbstractController
{
    /**
     * Get all category in db
     *
     * @Route("/", name="category_index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $categories = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();
        return $this->render(
            'category/index.html.twig',
            ['categories' => $categories]
        );
    }

    /**
     * Getting a program by category name
     *
     * @Route("/categoryName}", name="category_show)")
     * @param string $categoryName
     * @return Response
     */
    public function show(string $categoryName):Response
    {
        $program = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findBy(['name' => $categoryName]);
        if (!$categoryName) {
            throw $this->createNotFoundException(
                'No program with id : ' . $categoryName . ' found in program\'s table.'
            );
        }
        return $this->render('category/show.html.twig', [
                'category' => $categoryName,]
        );
    }
}