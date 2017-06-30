<?php

namespace tddbc\php;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
	/**
	 * @test
	 */
	public function sayHello()
	{
		$sut = new Sample();
		$this->assertEquals('hello', $sut->hello());
	}
}
