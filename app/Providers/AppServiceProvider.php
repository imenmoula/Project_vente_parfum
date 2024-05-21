<?php

namespace App\Providers;


use Darryldecode\Cart\Cart ;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {

            
            // Check if the user has an existing session
            if (!session()->has('guest_session')) {
                // Generate a unique session ID for the guest
                $guestSession = 'guest_' . uniqid();
                session(['guest_session' => $guestSession]);
            }
        
            // Get the guest session ID
            $guestSession = session('guest_session');
        
            // Use the app helper to resolve the Cart service
        
            $cartTotal = \Cart::session($guestSession)->getTotal();
            $cart = \Cart::session($guestSession)->getContent(); 

            $view->with(['cart' => $cart, 'cartTotal' => $cartTotal]);
        });
    }
}
