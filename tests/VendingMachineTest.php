<?php
/**
 * Created by PhpStorm.
 * User: fujiiyosuke
 * Date: 2017/07/01
 * Time: 13:15
 */

namespace tddbc\php;


class VendingMachineTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function 何も入れてないと総額が0円()
	{
		$sut = new VendingMachine();
		self::assertSame(0,$sut->total());
	}

	/**
	 * @test
	 */
	public function １０円玉を入れると総額が10円になる()
	{
		$sut = new VendingMachine();
		$sut->insert(10);
		self::assertSame(10, $sut->total());
	}
}
