<?php

use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase
{

	public function test_render()
	{
		$slug = new Slug("Cursos de Laravel");

		$this->assertEquals($slug->render(), "cursos-de-laravel");
	}

	public function test_render_without_spaces()
	{
		$slug = new Slug("   Cursos de Laravel    ");

		$this->assertEquals($slug->render(), "cursos-de-laravel");
	}

	public function test_get_original_string()
	{
		$slug = new Slug("Cursos de Laravel");
		$this->assertEquals($slug->getOriginal(), "Cursos de Laravel");
		$this->assertIsString($slug->getOriginal());
	}

}