<?php
/**
 * Created by PhpStorm.
 * User: fujiiyosuke
 * Date: 2017/07/01
 * Time: 14:54
 */

namespace tddbc\php;


class JuiceStockTest extends \PHPUnit_Framework_TestCase
{
	private $coke;

	public function setUp() {
		$this->coke = new Juice('コーラ', 120);
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラが５本入ってる()
	{
		$sut = new JuiceStock();
		self::assertEquals([$this->coke, 5],$sut->getJuice());
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラを増やせる()
	{
		$sut = new JuiceStock();
		$sut->addJuice($this->coke);
		self::assertEquals([$this->coke, 6],$sut->getJuice());
	}

	/**
	 * @test
	 */
	public function コーラを２つ増やせる()
	{
		$sut = new JuiceStock();
		$sut->addJuice($this->coke);
		$sut->addJuice($this->coke);
		self::assertEquals([$this->coke, 7],$sut->getJuice());
	}

	/**
	 * @test
	 * @expectedException \InvalidArgumentException
	 */
	public function 初期状態ではオレンジジュースを増やせない()
	{
		$sut = new JuiceStock();
		$orage = new Juice('オレンジ', 120);
		$sut->addJuice($orage);
	}
}
