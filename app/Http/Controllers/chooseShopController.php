<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\chooseShopService;

class chooseShopController extends Controller
{
	use ApiResponser;

    public $chooseShopService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(chooseShopService $chooseShopService)
    {
        //
         $this->chooseShopService = $chooseShopService;
    }
    public function index(Request $request)
    {
        //
        return $this->chooseShopService->obtainchooseShop();
       //return $this->successResponse($this->chooseShopService->createchooseShop($request->all(), Response::HTTP_CREATED));


    }



    //
}
