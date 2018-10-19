<?php
/**
 * Created by PhpStorm.
 * User: abeltrotter
 * Date: 10/19/18
 * Time: 2:21 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
    return new Response(sprintf(
      'Future page to show one space article: %s',
      $slug
    ));
  }
}