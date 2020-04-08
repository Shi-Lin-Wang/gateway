<?php

namespace App\Http\Controllers;
use App\sign_up;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\cartService;

class cartController extends Controller
{
	use ApiResponser;

    public $cartService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(cartService $cartService)
    {
        //
         $this->cartService = $cartService;
    }
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addcart(request $request)
    {
       // $storeID=$request->$_GET('storeID');
      $this->cartService->createproduct($request->all(), Response::HTTP_CREATED);
       //return $this->successResponse($this->cartService->createproduct($request->all(), Response::HTTP_CREATED));
       // return redirect($this->cartService->createproduct($request->all(), Response::HTTP_CREATED));
      // return $this->cartService->obtainproduct();

    return redirect("http://localhost:8008/cart?storeID=1");

        //return redirect( $this->successResponse($this->cartService->createproduct($request->all())));

    }

    public function cart()
    {

        return $this->cartService->obtainproduct();

    }


    public function getcartDetail()
    {
        return $this->cartService->obtainproduct();


    }
    public function CartDelete()
    {
        return $this->cartService->obtainproduct();



    }

    public function CartToOrder()
    {
        return $this->cartService->obtainproduct();


    }






    //
}
