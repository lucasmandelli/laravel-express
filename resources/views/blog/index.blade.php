@extends('app')

@section('content')
    <div class="page-header col-md-12">
        <h1>Blog Laravel Express</h1>
    </div>
    <div class="container-fluid">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <small><i>{{ date("d/m/Y H:i:s", strtotime($post->created_at)) }}</i></small>
                    <p>{!! nl2br($post->content) !!}</p>
                    <a href="{{ $post->id . '/' . strtolower(str_replace(" ", "-", $post->title)) }}" class="btn btn-success pull-right" >Leia Mais</a>
                    <div class="clearfix"></div>
                </div>
            @endforeach
            </div>
            <div class="col-md-4">
                @include("blog.sidebar")
            </div>
        </div>
    </div>
@endsection
