<?php

namespace App;

class Slug
{
	protected $original;

	public function __construct(string $original)
	{
		$this->original = $original;
	}

	public function getOriginal() : string
	{
		return trim($this->original);
	}
	
	public function render() : string
	{
		$slug = str_replace(" ", "-", $this->getOriginal());

		return strtolower($slug);
	}
}