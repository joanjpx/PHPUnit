<?php
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{

	public function test_render()
	{
		$slug = new Slug("Cursos de Laravel");
		$this->assertEquals($slug->render(), "cursos-de-laravel");
		$this->assertEquals($slug->render(), "cursos-de-laravel");
	}

}