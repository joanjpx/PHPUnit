<?php

use PHPUnit\Framework\TestCase;
use App\TweetController;

class TweetTest extends TestCase
{
	public function test_insert()
	{	
		$controller = new TweetController();
		$this->assertIsBool($controller->insert(['message' => 'Hola desde PHPUnit', 'user' => 'Joan Perez']));
		$this->assertTrue($controller->insert(['message' => 'Hola desde PHPUnit', 'user' => 'Joan Perez']));
	}
	
	public function test_selectOne()
	{
		$controller = new TweetController();
		$this->assertIsArray($controller->selectOne(130));
		// $this->assertCount(3,$controller->selectOne(130));
		
	}

	public function test_selectAll()
	{
		$controller = new TweetController();
		$this->assertIsArray($controller->selectAll());
	}
	
	public function test_update()
	{
		$controller = new TweetController();
		$this->assertIsBool($controller->update(130,['user' => '@Joanjpx']));
		$this->assertTrue($controller->update(130,['user' => '@Joanjpx']));
	}

}