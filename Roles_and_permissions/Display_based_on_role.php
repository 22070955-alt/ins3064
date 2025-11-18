<?php
echo '<h2>Menu Điều hướng</h2>';
echo '<ul>';

echo '<li><a href="index.php">Trang chủ</a></li>';

if (checkAccess('view_user')) {
    echo '<li><a href="list_users.php">Xem Danh sách Người dùng</a></li>';
}

if (checkAccess('create_user')) {
    echo '<li><a href="create.php">Tạo Người dùng Mới</a></li>';
}

if (checkAccess('edit_user')) {
    echo '<li><a href="edit.php">Chỉnh sửa Người dùng</a></li>';
}

if (checkAccess('delete_user')) {
    echo '<li><a href="delete.php" style="color: red;">Xóa Người dùng</a></li>';
}

if (checkAccess('edit_own_profile')) {
    echo '<li><a href="profile.php">Chỉnh sửa Hồ sơ</a></li>';
}

echo '</ul>';
?>