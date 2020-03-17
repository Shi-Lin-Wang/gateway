<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\registerService;

class signupController extends Controller
{
	use ApiResponser;

    public $registerService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(registerService $registerService)
    {
        //
         $this->registerService = $registerService;
    }
	public function index()
	{
		//return $this->successResponse($this->registerService->obtainsignup());
	}
		public function store(Request $request)
    {
        return $this->successResponse($this->registerService->createsignup($request->all(), Response::HTTP_CREATED));
    }
    public function create()
    {
        //
        return $this->registerService->obtainsignup();

    }
    //
}
