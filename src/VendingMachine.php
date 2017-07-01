<?php
/**
 * Created by PhpStorm.
 * User: fujiiyosuke
 * Date: 2017/07/01
 * Time: 13:21
 */

namespace tddbc\php;


class VendingMachine
{
	private $total = 0;


	/**
	 * VendingMachine constructor.
	 */
	public function __construct()
	{
	}

	public function total()
	{
		return $this->total;
	}

	public function insert($int)
	{
		$this->total = $int;
	}
}