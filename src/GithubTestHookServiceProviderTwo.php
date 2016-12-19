<?php

class GithubTestHookServiceProviderTwo extends \Illuminate\Support\ServiceProvider
{
  public function register(\Illuminate\Routing\Router $router)
  {
    $router->get('test-2', function () {
      return 'GithubTestHookServiceProviderTwo';
    });
  }
}
