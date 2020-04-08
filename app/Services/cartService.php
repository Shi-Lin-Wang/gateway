<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class cartService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.shop.base_uri');

    }
       public function obtainproduct()
    {
        return $this->performRequest('GET', '/cart');

    }
    public function createproduct($request)
    {
        return $this->performRequest('POST', '/addcart', $request);
    }
}
