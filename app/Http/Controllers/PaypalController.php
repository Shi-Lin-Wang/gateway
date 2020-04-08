<?php

namespace App\Http\Controllers;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\PaypalService;


class PaypalController extends Controller
{
    use ApiResponser;

    public $paypalService;

    /**->obtainPaypal();
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaypalService $paypalService)
    {
        //
         $this->PaypalService = $paypalService;
    }
    public function pay(Request  $request)
    {
        return $this->PaypalService->obtainPayapl($request);

    }


}
