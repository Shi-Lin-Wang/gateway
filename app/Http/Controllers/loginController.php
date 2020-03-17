<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\loginService;

class loginController extends Controller
{
	use ApiResponser;

    public $loginService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(loginService $loginService)
    {
        //
         $this->loginService = $loginService;
    }
	public function index()
	{
		//return $this->successResponse($this->registerService->obtainsignup());
	}
		public function store(Request $request)
    {
        return $this->successResponse($this->loginService->createsignup($request->all(), Response::HTTP_CREATED));
    }
    public function create()
    {
        //
        return $this->loginService->obtainsignup();

    }
    //
}
