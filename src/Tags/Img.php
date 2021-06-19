<?php

namespace App\Solid\Tags;

class Img {
  public function render($src){
    return '<img src="'.$src.'" />';
  }
}