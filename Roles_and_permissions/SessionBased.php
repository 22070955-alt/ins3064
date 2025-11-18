<?php
session_start();

$_SESSION['user_role'] = 'admin';

$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user', 'manage_roles'],
    'user' => ['view_user', 'edit_own_profile', 'submit_content'],
    'guest' => ['view_user']
];


function checkAccess($required_permission) {
    global $roles;

    $user_role = $_SESSION['user_role'] ?? 'guest';

    return isset($roles[$user_role]) && in_array($required_permission, $roles[$user_role]);
}
?>