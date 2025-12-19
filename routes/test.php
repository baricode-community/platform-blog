<?php

use Illuminate\Support\Facades\Route;

Route::get('/test-seed', function () {
    \App\Models\Blog::factory(5)->create();
    return 'Blog posts created successfully!';
});
