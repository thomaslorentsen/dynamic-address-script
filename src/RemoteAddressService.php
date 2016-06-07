<?php

namespace RoundPartner\DynamicAddress;

class RemoteAddressService
{

    /**
     * @var \RoundPartner\Cloud\Cloud
     */
    protected $client;

    public function __construct()
    {
        $config = \RoundPartner\Conf\Service::get('opencloud');
        $this->client = \RoundPartner\Cloud\CloudFactory::create($config['username'], $config['key'], $config['secret']);
    }

    /**
     * @return bool
     */
    public function updateAddress()
    {
        return false;
    }
}
