<?php

namespace MPAPI\Tests\Unit;

use MPAPI\Entity\Pricing;

/**
 * Class PricingTest
 *
 * @package MPAPI\Tests\Unit
 * @author  Michal Saloň <michal.salon@mallgroup.com>
 */
class PricingTest extends \Codeception\Test\Unit
{
	/** @var Pricing */
	private $object;

	protected function _before()
	{
		$this->object = new Pricing(100, 115, 130);
	}

	protected function _after()
	{
		unset($this->object);
	}

	public function testGetData()
	{
		$this->assertNotEmpty($this->object->getData());
	}

	public function testGetPrice()
	{
		$this->assertNotEmpty($this->object->getPrice());
		$this->assertEquals(100, $this->object->getPrice());
		$this->assertInternalType('int', $this->object->getPrice());
	}

	public function testSetPrice()
	{
		$price = 100;
		$this->assertNotEquals($this->object->getPrice(), $price);
		$this->object->setPrice($price);
		$this->assertNotEmpty($this->object->getPrice());
		$this->assertEquals($price, $this->object->getPrice());
		$this->assertInternalType('int', $this->object->getPrice());
	}

	public function testGetPurchasePrice()
	{
		$this->assertNotEmpty($this->object->getPurchasePrice());
		$this->assertEquals(115, $this->object->getPurchasePrice());
		$this->assertInternalType('int', $this->object->getPurchasePrice());
	}

	public function testSetPurchasePrice()
	{
		$price = 125;
		$this->assertNotEquals($this->object->getPurchasePrice(), $price);
		$this->object->setPurchasePrice($price);
		$this->assertNotEmpty($this->object->getPurchasePrice());
		$this->assertEquals($price, $this->object->getPurchasePrice());
		$this->assertInternalType('int', $this->object->getPurchasePrice());
	}

	public function testGetRrp()
	{
		$this->assertNotEmpty($this->object->getRrp());
		$this->assertEquals(130, $this->object->getRrp());
		$this->assertInternalType('int', $this->object->getRrp());
	}

	public function testSetRrp()
	{
		$rrp = 150;
		$this->assertNotEquals($this->object->getRrp(), $rrp);
		$this->object->setRrp($rrp);
		$this->assertNotEmpty($this->object->getRrp());
		$this->assertEquals($rrp, $this->object->getRrp());
		$this->assertInternalType('int', $this->object->getRrp());
	}
}
