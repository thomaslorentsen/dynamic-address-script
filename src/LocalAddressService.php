<?php

namespace RoundPartner\DynamicAddress;

use Ipify\Ip;

class LocalAddressService
{
    /**
     * @return string
     */
    public function getCurrentAddress()
    {
        return Ip::get();
    }
}
