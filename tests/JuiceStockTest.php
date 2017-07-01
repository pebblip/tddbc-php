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

	/**
	 * @test
	 */
	public function 初期状態ではコーラが５本入ってる()
	{
		$sut = new JuiceStock();
		$coke = new Juice('コーラ', 120);
		self::assertEquals([$coke, 5],$sut->getJuice());
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラを増やせる()
	{
		$coke = new Juice('コーラ', 120);

		$sut = new JuiceStock();
		$sut->addJuice('コーラ');
		self::assertEquals([$coke, 6],$sut->getJuice());
	}
}
