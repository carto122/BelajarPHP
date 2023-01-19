<?php 
namespace MiniAplikasi\Belajar\PHP\MVC\Controller;

class HomeController
{
  function index(): void 
  {
    $model = [
      'title'   => 'Belajar PHP MVC',
      'content' => 'Selamat Belajar PHP MVC'
    ];

    View::render('Home/index', $model);
  }

   function hello(): void 
  {
    echo "HomeController.hello()";
  }

   function world(): void 
  {
    echo "HomeController.world()";
  }
}