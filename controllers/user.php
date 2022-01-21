<?php
require_once 'models/user-model.php';

/**
 * Get a list of users
 */
function index() {
    $users = getAllUsers();

    return require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/views/users/index.view.php';   
}

/**
 * Show/get a single user record
 * @param $id (int) the user ID from database
 */
function show() {
    $userId = getUserIdFromUrl();

    $user = getSingleUser($userId);

    return require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/views/users/show.view.php';   
}

/**
 * Create a user
 */
function create() {
    return require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/views/users/create.view.php';   
}

/**
 * Store user record into database
 * POST
 */
function store() {
    $user = $_POST;
    $user['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    insert($user, 'users');

    header('Location: ?page=user');
}

/**
 * Store user record into database
 * POST
 */
function updateUser() {
    $userId = getUserIdFromUrl();

    $password = trim($_POST['password']);
    if (empty($password)) {
        unset($_POST['password']);
    } else {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    update($_POST, 'users', $userId);
    header('Location: /?page=home&action=updateSuccessful');

}

/**
 * Edit user record
 * 
 */
function edit() {
    $userId = getUserIdFromUrl();
    
    $user = getSingleUser($userId);

    return require_once $_SERVER['DOCUMENT_ROOT'] . '/assets/views/users/edit.view.php';   
}

/**
 * Delete user 
 * @param $id (int) the user record to delete
 */
function destroy($id) {
    
}

function getUserIdFromUrl()
{
    $userId = array_key_exists('id', $_GET) ? (int)$_GET['id'] : 0;

    if ($userId === 0) {
       die('Bad ID');
    }

    return $userId;
}