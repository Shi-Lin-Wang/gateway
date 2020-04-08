<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\viewProductService;

class viewProductController extends Controller
{
	use ApiResponser;

    public $viewProductService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(viewProductService $viewProductService)
    {
        //
         $this->viewProductService = $viewProductService;
    }
    public function index()
    {
        //
        return $this->viewProductService->obtainproduct();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->viewProductService->obtainproduct();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $users = DB::connection('account');
       return $this->successResponse($this->viewProductService->createproduct($request->all(), Response::HTTP_CREATED));

    }






    //
}
