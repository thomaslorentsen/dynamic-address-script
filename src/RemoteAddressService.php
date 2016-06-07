<?php

namespace RoundPartner\DynamicAddress;

class RemoteAddressService
{

    /**
     * @var \RoundPartner\Cloud\Cloud
     */
    protected $client;

    /**
     * @var array
     */
    protected $domainConfig;

    public function __construct($config)
    {
        $this->domainConfig = $config;
        $config = \RoundPartner\Conf\Service::get('opencloud');
        $this->client = \RoundPartner\Cloud\CloudFactory::create($config['username'], $config['key'], $config['secret']);
    }

    /**
     * @param string $address
     *
     * @return bool
     */
    public function updateAddress($address)
    {
        $domain = $this->client->domain()->getDomain($this->domainConfig['domain']);
        return $this->client->domain()->updateSubDomain($domain, $this->domainConfig['home'], $address);
    }
}
