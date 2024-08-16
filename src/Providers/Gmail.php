<?php

namespace Theworthcoding\Unisendcore\Providers;

use App\Models\Application;
use Illuminate\Support\Facades\Http;
use Theworthcoding\Unisendcore\Providers\BaseEmailServiceProvider;

class Gmail extends BaseEmailServiceProvider implements EmailServiceProviderApiInterface
{

    public  static function  make()
    {
        return new Gmail();
    }



    public function getAuthUrl(): string
    {
        $response = Http::get(
            'https://accounts.google.com/o/oauth2/auth',
        )->with([
            'client_id' => '446574363441-047c3fb0vvh3lkap5o8ig263f9pl8vjo.apps.googleusercontent.com',
            'redirect_uri' => 'http://127.0.0.1/callback/gmail',
            'response_type' => 'code',
            'scope' => 'https://www.googleapis.com/auth/gmail.readonly',
            'access_type' => 'offline',
            'prompt' => 'consent',
        ])->get();

        return $response;
    }

    public function getTokenUrl(): string
    {
        // TODO: Implement getTokenUrl() method.
    }
}
