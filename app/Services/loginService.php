<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class loginService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.login.base_uri');

    }
       public function obtainsignup()
    {
        return $this->performRequest('GET', '/login');
    }
     public function createsignup($request)
    {
        return $this->performRequest('POST', '/login', $request);
    }

}
