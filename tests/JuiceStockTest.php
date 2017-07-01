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
		self::assertSame(['コーラ', 5],$sut->getJuice());
	}

	/**
	 * @test
	 */
	public function 初期状態ではコーラを増やせる()
	{
		$sut = new JuiceStock();
		$sut->addJuice('コーラ');
		self::assertSame(['コーラ', 6],$sut->getJuice());
	}

}
