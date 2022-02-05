<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Profile
Breadcrumbs::for('profile', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('My Profile', route('profile.show'));
});

// Dashboard > Roles
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Roles', route('roles.index'));
});

// Dashboard > Roles > [Role]
Breadcrumbs::for('role-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('roles');
    $trail->push($item->name, route('roles.show', $item->id));
});

// Dashboard > Roles > Create
Breadcrumbs::for('role-create', function (BreadcrumbTrail $trail) {
    $trail->parent('roles');
    $trail->push('New Role', route('roles.create'));
});

// Dashboard > User
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Management Users', route('users.index'));
});

// Dashboard > Users > Create
Breadcrumbs::for('user-create', function (BreadcrumbTrail $trail) {
    $trail->parent('users');
    $trail->push('Add New User', route('users.create'));
});

// Dashboard > Users > [User]
Breadcrumbs::for('user-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('users');
    $trail->push($item->name, route('users.show', $item->id));
});