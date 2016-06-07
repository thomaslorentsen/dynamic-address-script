<?php

namespace RoundPartner\Test;

use RoundPartner\DynamicAddress\RemoteAddressService;

class RemoteAddressServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RemoteAddressService
     */
    protected $service;

    public function setUp()
    {
        $this->service = new RemoteAddressService();
    }

    public function testUpdateAddress()
    {
        $this->assertTrue($this->service->updateAddress());
    }
}
