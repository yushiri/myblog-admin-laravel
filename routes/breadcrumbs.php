<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Category;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('index'));
});

// User
Breadcrumbs::for('profile.index', function (BreadcrumbTrail $trail, User $user) {
    $trail->push('User profile ' . ucfirst($user->name));
});

Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Users', route('users.index'));
});

Breadcrumbs::for('users.create', function (BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('Create', route('users.create'));
});

Breadcrumbs::for('users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users.index');
    $trail->push($user->name, route('users.show', $user));
});

Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('users.index');
    $trail->push('Edit ' . $user->name, route('users.edit', $user));
});

// Category
Breadcrumbs::for('categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Categories', route('categories.index'));
});

Breadcrumbs::for('categories.create', function (BreadcrumbTrail $trail) {
    $trail->parent('categories.index');
    $trail->push('Create', route('categories.create'));
});

Breadcrumbs::for('categories.show', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories.index');
    $trail->push($category->name, route('categories.show', $category));
});

Breadcrumbs::for('categories.edit', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('categories.index');
    $trail->push('Edit ' . $category->name, route('categories.edit', $category));
});
