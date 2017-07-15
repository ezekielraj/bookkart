<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

namespace App\Controller;
    

class productsController extends Controller
{

	public function all($request, $response, array $args){
		$this->logger->addInfo("All Products list");
		$products = new \App\Model\productsModel($this->db);
		$result = $products->getProducts();
		$response->getBody()->write(json_encode($result));
		return $response;
	}

}
