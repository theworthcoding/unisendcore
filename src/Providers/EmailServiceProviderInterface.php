<?php

namespace Theworthcoding\Unisendcore\Providers;

interface EmailServiceProviderInterface {

    public function isConnected() : bool;
    public function connect() : bool;

}
