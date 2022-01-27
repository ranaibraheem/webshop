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
    $confirm_password = trim($_POST['confirm_password']);

    if (empty($password) || empty($confirm_password)) {
        unset($_POST['password']);
        unset($_POST['confirm_password']);
    } else {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $_POST['confirm_password'] = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);
    }

    if ($password === $confirm_password) {
        $_POST['updated_at']=date('Y-m-d H:i:s');
        update($_POST, 'users', $userId);
        header('Location: /?page=home&action=updateSuccessful');
    }
     else {
        header('Location: /?page=home&action=updatePasswordNotMatch');
    }
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