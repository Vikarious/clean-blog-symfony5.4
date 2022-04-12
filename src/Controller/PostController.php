<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('post/home.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    #[Route('/post/{id}', name: 'post_view')]
    public function index($id): Response
    {
        return $this->render('post/view.html.twig', [
            'post' => [
                'title' => 'Le titre de l\'article',
                
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi consequuntur amet ratione quos? Voluptas repellat, doloribus dolor, vero ea ipsa quasi consectetur doloremque facilis sint maxime ratione nisi sapiente consequatur? Dignissimos totam adipisci sunt fugiat consectetur nostrum omnis ullam rerum exercitationem magni ut nisi non quos earum quisquam reiciendis vitae impedit hic, corporis aliquid ad voluptate quae! Ex maiores voluptas assumenda modi ipsam possimus pariatur, autem nesciunt quos repellendus doloremque harum eveniet, ratione hic quod voluptatibus quasi molestiae tenetur magni reiciendis amet nulla dolor aliquam ut? Obcaecati neque soluta, rem nobis, delectus repudiandae ea tenetur corrupti ipsa ducimus dolores nemo natus fuga maiores quis dicta dolorum reprehenderit esse culpa quidem, deserunt et? Dignissimos aspernatur porro impedit rem, esse illo amet quasi omnis sapiente soluta cupiditate, eaque explicabo, dicta reprehenderit? Perferendis maiores veniam distinctio. Odit saepe voluptatem consequuntur tenetur natus asperiores, officia doloribus distinctio quasi, illum, temporibus eligendi expedita doloremque necessitatibus?',
            ]
        ]);
    }
}
