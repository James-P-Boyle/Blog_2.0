<?php

namespace App\Http\Controllers;

use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        $categories =
            Category::take(10)
                ->whereHas('posts', function($query) {
                    $query->published();
                })
                ->get();

        return view('posts.index', [
            'categories' => $categories
        ]);
    }
}
