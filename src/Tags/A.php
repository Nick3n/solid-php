<?php

namespace App\Solid\Tags;

class A {
  public function render(string $href, string $anchor){
    return '<a href="'.$href.'">'.$anchor.'</a>';
  }
}