<?php

function getUsers()
{
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function getUserById(int $id)
{
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['id'] === $id) {
            return $user;
        }
    }

    return null;
}

function createUser($data)
{
    $users = getUsers();

    $data['id'] = rand(1000000, 2000000);

    $users[] = $data;

    putJson($users);

    return $data;
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $index => $user) {
        if ($user['id'] == $id) {
            $users[$index] = $updateUser = array_merge($user, $data);
        }
    }

    putJson($users);

    return $updateUser;
}

function deleteUser($id)
{
    $users = getUsers();

    foreach ($users as $index => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $index, 1);
        }
    }

    putJson($users);
}

function uploadImage($file, $user)
{
    if(isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }

        $fileName = $file['name'];
        $dotPosition = strpos($fileName, '.');
        $extensionFile = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['tmp_name'], __DIR__ . "/images/{$user['id']}.$extensionFile");

        $user['extension'] = $extensionFile;
        updateUser($user, $user['id']);
    }
}

function putJson($users)
{
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}

