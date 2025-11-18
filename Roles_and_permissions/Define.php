<?php
$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user', 'manage_roles'],
    'user' => ['view_user', 'edit_own_profile', 'submit_content'],
    'guest' => ['view_user']
];

$user_roles = [
    1 => ['username' => 'alice', 'role' => 'admin'],
    2 => ['username' => 'bob', 'role' => 'user'],
    3 => ['username' => 'charlie', 'role' => 'guest']
];
?>