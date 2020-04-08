<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\browserProductService;

class browserProductController extends Controller
{
	use ApiResponser;

    public $browserProductService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(browserProductService $browserProductService)
    {
        //
         $this->browserProductService = $browserProductService;
    }
    public function index()
    {
        //
        return $this->browserProductService->obtainproduct();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->browserProductService->obtainproduct();

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
       return $this->successResponse($this->browserProductService->createproduct($request->all(), Response::HTTP_CREATED));

    }






    //
}
