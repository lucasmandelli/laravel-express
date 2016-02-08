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
                    <h2>{{ $post['title'] }}</h2>
                    <p>{{ $post['content'] }}</p>
                </div>
            @endforeach
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
@endsection
