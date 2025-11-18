<?php
function hasPermission($user_id, $permission) {
    global $users, $roles;

    if (!isset($users[$user_id])) {
        return false;
    }

    $user_role = $users[$user_id]['role'];

    if (!isset($roles[$user_role])) {
        return false;
    }

    return in_array($permission, $roles[$user_role]);
}
?>