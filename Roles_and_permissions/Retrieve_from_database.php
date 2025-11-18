<?php
function getUserPermissions($user_id) {
    $conn = mysqli_connect("localhost", "user", "pass", "db");
    
    if (!$conn) {
        return [];
    }

    $sql = "SELECT p.permission_name 
            FROM users u 
            JOIN roles r ON u.role_id = r.role_id 
            JOIN role_permissions rp ON r.role_id = rp.role_id 
            JOIN permissions p ON rp.permission_id = p.permission_id 
            WHERE u.user_id = $user_id";
            
    $result = mysqli_query($conn, $sql);
    
    $permissions = [];
    if ($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $permissions[] = $row['permission_name'];
        }
        mysqli_free_result($result);
    }   
    mysqli_close($conn);
    return $permissions;
}
?>