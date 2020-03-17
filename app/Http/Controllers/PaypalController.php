<?php

namespace App\Http\Controllers;
use App\Pay;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\PaypalService;
use App\paypal\first;
//require __DIR__  . '../../Http/vendor/autoload.php';
include "verifyToken.php";

class PaypalController extends Controller
{
    use ApiResponser;

    public $paypalService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaypalService $paypalService)
    {
        //
         $this->paypalService = $paypalService;
    }
    public function pay(Request $request)
    {
        //$storeID = $_GET["storeID"];
        //$storeID=$_POST["storeID"];
session_start();
//session_name('siteA');
$value = $request->cookie('token');
//$value1 = $request->session()->get('token');
$_SESSION['token'] = $value;
//print_r($_SESSION);
//$b=$request->session('token', $value);
//echo $b;
 //$request->session()->put('token', $value);
         
         $a=$request->all();
         //$array=array('token' =>$value);
         //$array =['token' =>$value];
        //$array =array_add($a,'token' ,$value);
       // array_push($a, "token"->$value);
         $a['token']=$value;
         //$request->session()->push($a,$value);
         
         array_push($a,$value);


        //print_r($a);
       // $a = array($value => 'token');
       // echo $a;
       //echo $value;
       
        foreach($a as $key=>$value)
        {
            //echo $key." => ".$value."<br />";
           // echo $value;
            //print_r($a);
        }
        //$response->session() -> put('token',$value);
 redirect( $this->successResponse($this->paypalService->obtainPaypal($request->all())));


    }
       // public function data(Request $request)
    //{

      //         $this->authorService->obtainPaypal($request->storeID);
        //return $this->successResponse($this->paypalService->paypalService($request->all(), Response::HTTP_CREATED));
    //}


public function store(Request $request)
{
    session_start();
    $value = $request->cookie('token');
    
    //$_SESSION['token']=$value;
    session_name('siteA');
//session_start();
$_SESSION["token"] = $value;
 $request->session()->put('token', $value);
         $a=$request->all();
          Session::push($a,$value);
         //$array[0]='token';
         //$array=array('token' =>$value);
         //$array =['token' =>$value];
        //$array =array_add($a,'token' ,$value);
       // array_push($a, "token"->$value);
         $a['token']=$value;
         array_push($a,$value);
        //print_r($a);
       // $a = array($value => 'token');
       // echo $a;
       //echo $value;
       
        foreach($a as $key=>$value)
        {
            echo $key." => ".$value."<br />";
           // echo $value;
            print_r($a);
        }

}
public function pay1(Request $request)
    {

    $value = $request->cookie('token');
     $request->session()->put('token', $value);
         $a=$request->all();
        array_push($a, ['token' => $value]);

       //echo $value;
       
        foreach($a as $key=>$value)
        {
            //echo $key." => ".$value."<br />";
           // echo $value;
            print_r($a);
        }
}
}
