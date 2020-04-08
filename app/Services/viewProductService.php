<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class viewProductService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.shop.base_uri');

    }
       public function obtainproduct()
    {
        return $this->performRequest('GET', '/viewProduct');
    }
     public function createproduct($request)
    {
        return $this->performRequest('POST', '/viewProduct1', $request);
    }

}
