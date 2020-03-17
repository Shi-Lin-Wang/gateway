<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class registerService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.register.base_uri');

    }
       public function obtainsignup()
    {
        return $this->performRequest('GET', '/signup');
    }
     public function createsignup($request)
    {
        return $this->performRequest('POST', '/signup', $request);
    }

}
