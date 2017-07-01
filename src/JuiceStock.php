<?php
/**
 * Created by PhpStorm.
 * User: fujiiyosuke
 * Date: 2017/07/01
 * Time: 15:31
 */

namespace tddbc\php;


class JuiceStock
{
	private $quontity = 5;

	/**
	 * JuiceStock constructor.
	 */
	public function __construct()
	{
	}

	public function getJuice()
	{
		return [Juice::coke(), $this->quontity];
	}

	public function addJuice(Juice $juice)
	{
		if ($juice != Juice::coke()) {
			throw new \InvalidArgumentException();
		}

		$this->quontity++;
	}
}