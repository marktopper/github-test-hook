<?php

namespace GithubTestHookServiceProvider;

class Tree extends \Illuminate\Support\ServiceProvider
{
  public function boot(\Illuminate\Routing\Router $router)
  {
    $router->get('test-3', function () {
      return 'GithubTestHookServiceProvider\Tree';
    });
  }
}
