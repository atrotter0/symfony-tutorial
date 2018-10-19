<?php
/**
 * Created by PhpStorm.
 * User: abeltrotter
 * Date: 10/19/18
 * Time: 2:21 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function homepage()
  {
    return new Response('New page');
  }

  /**
   * @Route("/news/{slug}")
   */
  public function show($slug)
  {
    $comments = [
      'This is a comment',
      'Another comment',
      'Yay three comments'
    ];
    return $this->render('article/show.html.twig', [
      'title' => ucwords(str_replace('-', ' ', $slug)),
      'comments' => $comments,
    ]);
  }
}