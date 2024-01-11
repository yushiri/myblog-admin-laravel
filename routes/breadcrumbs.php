<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.

Breadcrumbs::for('index', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('index'));
});

Breadcrumbs::for('admin.index', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('admin.index'));
});

/**
 * User
 */
Breadcrumbs::for('profile.show', function (BreadcrumbTrail $trail, User $user) {
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

/**
 * Category
 */
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

/**
 * Tag
 */
Breadcrumbs::for('tags.index', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Tags', route('tags.index'));
});

Breadcrumbs::for('tags.create', function (BreadcrumbTrail $trail) {
    $trail->parent('tags.index');
    $trail->push('Create', route('tags.create'));
});

Breadcrumbs::for('tags.show', function (BreadcrumbTrail $trail, Tag $tag) {
    $trail->parent('tags.index');
    $trail->push($tag->name, route('tags.show', $tag));
});

Breadcrumbs::for('tags.edit', function (BreadcrumbTrail $trail, Tag $tag) {
    $trail->parent('tags.index');
    $trail->push('Edit ' . $tag->name, route('tags.edit', $tag));
});

/**
 * Post
 */
Breadcrumbs::for('posts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('index');
    $trail->push('Posts', route('posts.index'));
});

Breadcrumbs::for('posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('posts.index');
    $trail->push('Create', route('posts.create'));
});

Breadcrumbs::for('posts.show', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('posts.index');
    $trail->push($post->title, route('posts.show', $post));
});

Breadcrumbs::for('posts.edit', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('posts.index');
    $trail->push('Edit ' . $post->title, route('posts.edit', $post));
});
