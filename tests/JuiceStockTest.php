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
	public function setUp()
	{
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラが５本入ってる()
	{
		$sut = new JuiceStock();
		self::assertEquals([Juice::coke(), 5], $sut->getJuice());
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラを増やせる()
	{
		$sut = new JuiceStock();
		$sut->addJuice(Juice::coke());
		self::assertEquals([Juice::coke(), 6], $sut->getJuice());
	}

	/**
	 * @test
	 */
	public function コーラを２つ増やせる()
	{
		$sut = new JuiceStock();
		$sut->addJuice(Juice::coke());
		$sut->addJuice(Juice::coke());
		self::assertEquals([Juice::coke(), 7], $sut->getJuice());
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
