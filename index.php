<?php

require __DIR__ . '/vendor/autoload.php';

use RoundPartner\DynamicAddress\LocalAddressService;
use RoundPartner\DynamicAddress\RemoteAddressService;
use RoundPartner\DynamicAddress\UpdateAddressService;

$config = \RoundPartner\Conf\Service::get('domain');
$local = new LocalAddressService();
$remote = new RemoteAddressService($config);
$service = new UpdateAddressService($local, $remote);

$service->updateAddress();
