@extends('app')

@section('content')
    <div class="page-header col-md-12">
        <h1>Blog Laravel Express</h1>
    </div>
    <div class="container-fluid">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-8">
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <small><i>{{ date("d/m/Y H:i:s", strtotime($post->created_at)) }}</i></small>
                    <p>{!! nl2br($post->content) !!}</p>
                </div>

                <div class="comments" >
                    <h3><i class="glyphicon glyphicon-comment"></i> Comentarios</h3>
                    <small>Comentarios estao estaticos</small>

                    <ul class="comentarios">
                        @foreach($comments as $comment)
                        <li>
                            {{ $comment['nome'] }} ({{ $comment['email'] }})<br/>
                            {{ $comment['comentario'] }}
                        </li>
                        @endforeach
                    </ul>

                    <hr/>

                    <form id="formComment" action="" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="comentario">Comentario</label>
                            <textarea name="comentario" class="form-control" id="comentario" ></textarea>
                        </div>
                        <button class="btn btn-default pull-right" >Comentar</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                @include("blog.sidebar")
            </div>
        </div>
    </div>
@endsection
