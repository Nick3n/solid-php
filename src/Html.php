<?php

namespace App\Solid;

class Html {
  public function __call(string $methodName, array $arguments) {
    // Magic method to call classes
    $class = '\App\Solid\Tags\\'.ucfirst($methodName);

    return call_user_func_array([new $class, 'render'], $arguments);
  }
}