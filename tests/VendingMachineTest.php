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
		self::assertSame(0, $sut->total());
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

	/**
	 * @test
	 */
	public function １０円玉と50円玉を入れると60円になる()
	{
		$sut = new VendingMachine();
		$sut->insert(10);
		$sut->insert(50);
		self::assertSame(60, $sut->total());

	}

	/**
	 * @test
	 */
	public function 総額が０円の時に払い戻しをすると釣銭は０円になる()
	{
		$sut = new VendingMachine();
		$sut->refund();
		self::assertSame(0, $sut->change());
	}

	/**
	 * @test
	 */
	public function 総額が1000円の時に払い戻しをすると、1000円札が返ってくる()
	{
		$sut = new VendingMachine();
		$sut->insert(1000);
		$sut->refund();
		self::assertSame(1000, $sut->change());
	}
}
