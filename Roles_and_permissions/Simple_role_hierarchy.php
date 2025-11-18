<?php
$role_hierarchy = [
    'admin' => ['parent' => null, 'permissions' => ['view', 'edit', 'delete']],
    'moderator' => ['parent' => 'user', 'permissions' => ['edit']], // Kế thừa từ 'user'
    'user' => ['parent' => 'guest', 'permissions' => ['create']], // Kế thừa từ 'guest'
    'guest' => ['parent' => null, 'permissions' => ['view']],
];

function getAllPermissions($role_name, $hierarchy_data) {
    $permissions = [];
    
    if (isset($hierarchy_data[$role_name])) {
        $permissions = $hierarchy_data[$role_name]['permissions'];
        $parent_role = $hierarchy_data[$role_name]['parent'];
        
        if ($parent_role !== null) {
            $parent_permissions = getAllPermissions($parent_role, $hierarchy_data);
            $permissions = array_unique(array_merge($permissions, $parent_permissions));
        }
    }   
    return $permissions;
}
?>