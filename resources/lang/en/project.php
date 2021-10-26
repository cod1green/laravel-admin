<?php

return [
    'profile' => [
        'title' => 'Perfis',
        'title_singular' => 'Perfil',
    ],
    'home' => [
        'title' => 'Home page',
        'title_singular' => 'Home page',
    ],
    'dashboard' => [
        'title' => 'Dashboard',
        'title_singular' => 'Dashboard',
    ],
    'administration' => [
        'title' => 'Administration',
        'title_singular' => 'Administration',
    ],
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
        'create' => 'Create user',
        'edit' => 'Edit user',
        'delete' => 'Delete user',
        'show' => 'Show user',
        'list' => 'User list',
        'current_password_incorrect' => 'Current password is incorrect',
        'email_not_changed_current_password_required' => 'Email not changed, current password is required',
        'only_3_photo_per_user' => 'Only 3 photos per user',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'email' => 'Email',
            'email_helper' => ' ',
            'email_verified_at' => 'Email verified',
            'email_verified_at_helper' => ' ',
            'password' => 'Password',
            'password_helper' => ' ',
            'current_password' => 'Current password',
            'current_password_helper' => ' ',
            'new_password' => 'New password',
            'new_password_helper' => ' ',
            'password_confirmation' => 'Password confirmation',
            'password_confirmation_helper' => ' ',
            'photo' => 'Photo',
            'photo_helper' => ' ',
            'roles' => 'Roles',
            'roles_helper' => ' ',
            'permissions' => 'Permissions',
            'permissions_helper' => ' ',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
        'create' => 'Create role',
        'edit' => 'Edit role',
        'delete' => 'Delete role',
        'show' => 'Show role',
        'list' => 'Role list',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'permissions' => 'Permissions',
            'permissions_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
        'create' => 'Create permission',
        'edit' => 'Edit permission',
        'delete' => 'Delete permission',
        'show' => 'Show permission',
        'list' => 'Permission list',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'roles' => 'Roles',
            'roles_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title' => 'Settings',
        'title_singular' => 'Setting',
        'updated' => 'Settings updated successfully',
    ],
    'backup' => [
        'title' => 'Backups',
        'title_singular' => 'Backup',
        'create' => 'Create backup',
        'create_only_file' => 'Create file backup',
        'create_only_database' => 'Create database backup',
        'edit' => 'Edit backup',
        'delete' => 'Delete backup',
        'show' => 'Show backup',
        'list' => 'Backup list',
        'no_backup_present' => 'No backup present',
        'question_delete' => 'Are you sure you want to delete the backup created in :created ?',
        'fields' => [
            'id' => 'ID',
            'id_helper' => ' ',
            'name' => 'Name',
            'name_helper' => ' ',
            'disk' => 'Disk',
            'disk_helper' => ' ',
            'healthy' => 'Healthy',
            'healthy_helper' => ' ',
            'amount' => 'Amount',
            'amount_helper' => ' ',
            'newest' => 'Newest backup',
            'newest_helper' => ' ',
            'used_storage' => 'Used storage',
            'used_storage_helper' => ' ',
            'path' => 'Path',
            'path_helper' => ' ',
            'size' => 'Size',
            'size_helper' => ' ',
            'created_at' => 'Created at',
            'created_at_helper' => ' ',
            'updated_at' => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'command' => [
        'title' => 'Commands',
        'title_singular' => 'Command',
    ],
    'debug' => [
        'title' => 'Debugs',
        'title_singular' => 'Debug',
    ],
];
