<?php

namespace RoundPartner\Test;

use RoundPartner\DynamicAddress\LocalAddressService;

class LocalAddressServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LocalAddressService
     */
    protected $service;

    public function setUp()
    {
        $this->service = new LocalAddressService();
    }

    public function testGetInstance()
    {
        $this->assertInstanceOf('\RoundPartner\DynamicAddress\LocalAddressService', $this->service);
    }

    public function testGetCurrentAddress()
    {
        $this->assertStringMatchesFormat('%d.%d.%d.%d', $this->service->getCurrentAddress());
    }
}
