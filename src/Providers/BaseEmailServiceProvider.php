<?php

namespace Theworthcoding\Unisendcore\Providers;

use App\Models\Application;
use Theworthcoding\Unisendcore\Providers\EmailServiceProviderInterface;

class BaseEmailServiceProvider implements EmailServiceProviderInterface
{

    private ?Application $application = null;
    public  function connectApplication($application) : self
    {
        $this->application = $application;

        return $this;
    }


    public function isConnected(): bool
    {
        // TODO: Implement isConnected() method.
        return true;
    }

    public function connect(): bool
    {
        // TODO: Implement connect() method.
        return true;
    }
}
