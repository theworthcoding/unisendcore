<?php

namespace Theworthcoding\Unisendcore\Providers;

interface EmailServiceProviderApiInterface {

    public function getAuthUrl() : string;
    public function getTokenUrl() : string;

}
