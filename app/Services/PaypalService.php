<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
use App\paypal\first;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
//require __DIR__  . '\autoload.php';
//include "C:\\xampp\htdocs\LumenApiGateway\app\Http\Controllers\\verifyToken.php";

class PaypalService
{
use ConsumesExternalService;
public $baseUri;
 
public function __construct()
    {
        $this->baseUri = config('services.paypals.base_uri');
        
    }


      public function obtainPaypal($data)
    {
    	

//$res = mysqli_query(($connection,"SELECT * FROM `post` WHERE `storeID` = '$storeID';"); 
//$row = mysqli_fetch_array($res); 
    	
    	//$token = Request::cookie('token');
    	//$token = $request->cookie('token');
		//$token = request()->cookie('token');
// ...
		//$token = Cookie::get('token');


    	$pay= $this->performRequest('GET', '/pay' ,$data);
         echo $pay;
            //return $this->performRequest('POST', '/books', $data);
    
         return $pay;
         
         //return $this->performRequest('GET', '/pay');

    }
    
} 