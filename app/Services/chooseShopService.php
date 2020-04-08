<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class chooseShopService
{
	use ConsumesExternalService;
	 public $baseUri;

	 public function __construct()
    {
        $this->baseUri = config('services.shop.base_uri');

    }
       public function obtainchooseShop()
    {
        return $this->performRequest('GET', '/chooseShop');
    }


}
