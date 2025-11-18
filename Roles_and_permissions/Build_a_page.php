<?php
function addPermissionToRole($role_id, $permission_id) {

    $sql = "INSERT INTO role_permissions (role_id, permission_id) 
            VALUES ($role_id, $permission_id) 
            ON DUPLICATE KEY UPDATE role_id = role_id";
    return "Đã thêm Quyền $permission_id vào Vai trò $role_id (Logic CSDL)";
}

function removePermissionFromRole($role_id, $permission_id) {
    $sql = "DELETE FROM role_permissions 
            WHERE role_id = $role_id AND permission_id = $permission_id";
    return "Đã xóa Quyền $permission_id khỏi Vai trò $role_id (Logic CSDL)";
}
?>

<h2>Quản lý Quyền hạn cho Vai trò</h2>
<form method="POST">
    <label for="role_id">ID Vai trò:</label>
    <input type="number" name="role_id" required><br><br>
    
    <label for="permission_id">ID Quyền hạn:</label>
    <input type="number" name="permission_id" required><br><br>

    <button type="submit" name="action" value="add">Thêm Quyền</button>
    <button type="submit" name="action" value="remove">Xóa Quyền</button>
</form>