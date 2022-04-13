@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">  
                <a href="{{ route('blog') }}" class="btn btn-outline-primary btn-sm">Retourner</a>             
                <h1 class="display-one">{{ ucfirst($post->title) }}</h1>
                {!! $post->body !!}
                <hr>
                <a href="" class="btn btn-outline-primary">Modifier l'article</a>
                <hr>
                <button class="btn btn-danger">Supprimer l'article</button>
            </div>
        </div>
    </div>
@endsection