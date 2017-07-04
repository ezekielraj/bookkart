<?php
$app->get('/users', function (Request $request, Response $response) {
    $this->logger->addInfo("Users list");
    $users = new usersModel($this->db);
    $result = $users->getUsers();

    return $result;
});
