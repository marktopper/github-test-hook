<?php

class GithubTestHookServiceProvider extends \Illuminate\Support\ServiceProvider
{
  public function register(\Illuminate\Routing\Router $router)
  {
    $router->get('test', function () {
      return 'GithubTestHookServiceProvider';
    });
  }
}
