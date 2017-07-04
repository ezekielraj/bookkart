<?php
$app->get('/users', function ($request, $response) {
    $this->logger->addInfo("Users list");
    $users = new usersModel($this->db);
    $result = $users->getUsers();

    $response->getBody()->write(json_encode($result));

    return $response;
});
