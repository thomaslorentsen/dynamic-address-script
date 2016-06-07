<?php

namespace RoundPartner\DynamicAddress;

class UpdateAddressService
{
    /**
     * @var LocalAddressService
     */
    protected $localAddressService;

    /**
     * @var RemoteAddressService
     */
    protected $remoteAddressService;

    /**
     * UpdateAddressService constructor.
     *
     * @param LocalAddressService $localAddressService
     * @param RemoteAddressService $remoteAddressService
     */
    public function __construct(LocalAddressService $localAddressService, RemoteAddressService $remoteAddressService)
    {
        $this->localAddressService = $localAddressService;
        $this->remoteAddressService = $remoteAddressService;
    }

    /**
     * @return bool
     */
    public function updateAddress()
    {
        $address = $this->localAddressService->getCurrentAddress();
        return $this->remoteAddressService->updateAddress($address);
    }
}
