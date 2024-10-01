<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

// if (!empty($_GET['id'])) {
//     $id = $_GET['id'];
//     $userModel->deleteUserById($id);//Delete existing user
// }

function hashId($id)
{
    return md5($id);
}

if (!empty($_GET['id'])) {
    // $_id = $_GET['id'];
    $hashID = $_GET['id'];
    $alluser = $userModel->getUsers();

    foreach ($alluser as $u) {
        if (hashId($u['id']) == $hashID) {
            $_id = $u['id'];
            $user = $userModel->deleteUserById($_id); //Update existing user
            break;
        }
    }
}

header('location: list_users.php');
?>