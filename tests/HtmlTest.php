<?php

namespace App\Solid;

class HtmlTest extends \PHPUnit\Framework\TestCase {

  public function testEnsureIsTrue(){
    $this->assertTrue(true);
  }

  public function testEnsureReturnImage(){
    $html = new Html();
    $img = $html->img('images/photo.jpg');
    $this->assertEquals('<img src="images/photo.jpg" />', $img);
  }

  public function testCreateImageWithAnchorLink(){
    // $this->assertTrue(true);
    $html = new Html();
    $img = $html->img('images/photo.jpg');
    $link = $html->a('http://seusite.com.br/perfil', $img);
    $this->assertEquals('<a href="http://seusite.com.br/perfil"><img src="images/photo.jpg" /></a>', $link);
  }

  /*public function testRenderImage(){
    // $this->assertTrue(true);
    $html = new Html();
    $img = $html->img('images/photo.jpg');
    $this->assertEquals('<img src="images/photo.jpg" />', $img);
  }*/
}