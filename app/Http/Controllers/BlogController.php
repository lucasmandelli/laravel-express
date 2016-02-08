<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $posts = [
            0 => [
                'title' => 'Post #1',
                'content' => 'Content #1 from post #1'
            ],
            1 => [
                'title' => 'Post #2',
                'content' => 'Content #2 from post #2'
            ],
            2 => [
                'title' => 'Post #1',
                'content' => 'Content #2 from post #2'
            ],
            3 => [
                'title' => 'Post #1',
                'content' => 'Content #2 from post #2'
            ],
            4 => [
                'title' => 'Post #1',
                'content' => 'Content #2 from post #2'
            ]
        ];

        return view("blog.index", compact('posts'));
    }
}
