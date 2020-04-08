<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Traits\ConsumesExternalService;
class PaypalService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.paypals.base_uri');

    }
       public function obtainPayapl(Request  $request)
    {
        $url = $request->fullUrl();
        $storeID = $_GET["storeID"];
        //echo $url;
        //return $this->performRequest('GET', '/pay');
        return redirect("http://localhost:8009/pay?storeID=$storeID");
    }


}
