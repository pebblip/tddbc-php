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
	private $sut;

	public function setUp()
	{
		$this->sut = new VendingMachine();
	}

	/**
	 * @test
	 */
	public function 何も入れてないと総額が0円()
	{

		self::assertSame(0, $this->sut->total());
	}

	/**
	 * @test
	 */
	public function １０円玉を入れると総額が10円になる()
	{

		$this->sut->insert(10);
		self::assertSame(10, $this->sut->total());
	}

	/**
	 * @test
	 */
	public function １０円玉と50円玉を入れると60円になる()
	{

		$this->sut->insert(10);
		$this->sut->insert(50);
		self::assertSame(60, $this->sut->total());

	}

	/**
	 * @test
	 */
	public function 総額が０円の時に払い戻しをすると釣銭は０円になる()
	{

		$this->sut->refund();
		self::assertSame(0, $this->sut->change());
	}

	/**
	 * @test
	 */
	public function 総額が1000円の時に払い戻しをすると、1000円札が返ってくる()
	{

		$this->sut->insert(1000);
		$this->sut->refund();
		self::assertSame(1000, $this->sut->change());
	}

	/**
	 * @test
	 */
	public function ５００円入れてから払い戻しをすると総額が0になる()
	{

		$this->sut->insert(500);
		$this->sut->refund();
		self::assertSame(0, $this->sut->total());
	}

	/**
	 * @test
	 */
	public function １円玉を入れると総額が変わらない()
	{
		$this->sut->insert(500);
		$this->sut->insert(1);
		self::assertSame(500, $this->sut->total());
	}

	/**
	 * @test
	 */
	public function ５円玉を入れると総額が変わらない()
	{
		$this->sut->insert(500);
		$this->sut->insert(5);
		self::assertSame(500, $this->sut->total());
	}

	/**
	 * @test
	 */
	public function １円玉を入れると釣銭が１円となる。()
	{
		$this->sut->insert(1);
		self::assertSame(1, $this->sut->change());
	}
}
