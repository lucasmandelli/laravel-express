<?php

namespace App\Http\Controllers;

use App\Post;
use Faker\Generator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('blog.index', compact('posts'));
    }

    public function post($id, $titulo)
    {
        $post = Post::find($id);

        $comments = [
            0 => [
                'nome' => 'Nome 1',
                'email' => 'email1@email.com',
                'comentario' => 'Comentario um'
            ],
            1 => [
                'nome' => 'Nome 2',
                'email' => 'email2@email.com',
                'comentario' => 'Comentario dois'
            ],
            2 => [
                'nome' => 'Nome 3',
                'email' => 'email3@email.com',
                'comentario' => 'Comentario tres'
            ]
        ];

        return view('blog.post', compact('post', 'comments'));
    }
}
