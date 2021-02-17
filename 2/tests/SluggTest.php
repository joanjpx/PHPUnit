<?php
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class SluggTest extends TestCase
{

	public function test_render2()
	{

		$slug = new Slug("Cursos de Laravel");

		$this->assertEquals($slug->render(), "cursos-de-laravel");
		$this->assertEquals($slug->render(), "cursos-de-laravel");
	}

}