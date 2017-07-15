<?php


$app->get('/users', 'App\Controller\userController:index'); 

    /*function ($request, $response) {
    $this->logger->addInfo("Users list");
    $users = new App\Model\usersModel($this->db);
    $result = $users->getUsers();

    $response->getBody()->write(json_encode($result));

    return $response;
});*/

$app->group('/products', function(){
    $this->get('/all', 'App\Controller\productsController:all');
	
});
/*->add(function ($request, $response, $next) {
    $response->getBody()->write('It is now ');
    $response = $next($request, $response);
    $response->getBody()->write('. Enjoy!');

    return $response;
});*/
