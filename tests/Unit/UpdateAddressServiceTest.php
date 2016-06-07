<?php

namespace RoundPartner\Test;

use RoundPartner\DynamicAddress\LocalAddressService;
use RoundPartner\DynamicAddress\RemoteAddressService;
use RoundPartner\DynamicAddress\UpdateAddressService;

class UpdateAddressServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UpdateAddressService
     */
    protected $service;
    
    public function setUp()
    {
        $config = \RoundPartner\Conf\Service::get('testdomain');
        $local = new LocalAddressService();
        $remote = new RemoteAddressService($config);
        $this->service = new UpdateAddressService($local, $remote);
    }

    public function testUpdateAddress()
    {
        $this->assertTrue($this->service->updateAddress());
    }
}
