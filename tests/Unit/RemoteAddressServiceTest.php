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
        $config = \RoundPartner\Conf\Service::get('testdomain');
        $this->service = new RemoteAddressService($config);
    }

    public function testUpdateAddress()
    {
        $this->assertTrue($this->service->updateAddress('127.0.0.1'));
    }
}
