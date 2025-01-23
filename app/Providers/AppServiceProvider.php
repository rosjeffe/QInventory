<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        Fortify::authenticateUsing(function ($request) {
            $validated = Auth::validate([
                'mail' => $request->email,
                'password' => $request->password,
            ]);

            return $validated ? Auth::getLastAttempted() : null;
        });
    }
}