<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Auth;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{

    $this->middleware(function ($request, $next) {
        // view()->share('user', $request->user());
      	$session_id = $request->session()->getId();
      	// $cart = Cart::firstOrCreate(['session_id' => $session_id]);
      
		// Config::set('cart', $cart); // Для получения текущей корзины в контроллерах, где нет ID сессии Config::get('cart')
		view()->share('user', Auth::guard('backpack')->user());
		view()->share('session_id', $session_id);
		// view()->share('cart', $cart); //cart во всех views
        return $next($request);
    });

	}
}
