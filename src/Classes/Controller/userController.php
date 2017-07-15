<?php

//use Psr\Http\Message\ServerRequestInterface;
//use Psr\Http\Message\ResponseInterface;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

namespace App\Controller;
    

class userController extends Controller
{

    public function index($request, $response, array $args){
        $this->container->logger->addInfo("Users list");
    $users = new \App\Model\usersModel($this->container->db);
    //var_dump($this->container);
    $result = $users->getUsers();

    $response->getBody()->write(json_encode($result));

    return $response;
    } 

}